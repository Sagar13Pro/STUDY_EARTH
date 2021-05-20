//Step 1: Creating the main()
//We create a main() function that takes in the required arguments (server_ip, start_port, end_port). The server IP must be IPv4, though we can extend it to accept IPv6 as well. Try it yourself !!

int main(int argc, char *argv[])
{
    if (argc < 4)
    {
        printf ("Please enter the server IP address"
                " and range of ports to be scanned\n");
        printf ("USAGE: %s IPv4 First_Port Last_Port\n", 
                argv[0]);
        exit(1);
    }
    char tIP[16] = {0};
    strcpy(tIP, argv[1]); // Copy the IPv4 address
    char First_Port[6] = {0};
    strcpy(First_Port, argv[2]); // Copy the start_port
    char Last_Port[6] = {0};
    strcpy(Last_Port, argv[3]); // Copy the end_port

    // Start port-scanner
    port_scanner(tIP, First_Port, Last_Port);
    return 0;
}

//Step 2: Creating the port_scanner()
//Create a new function, port_scanner(). We traverse through all the ports in range provided and then check against each one of them.
//Create a “struct addrinfo hints” and initialize it with proper values.
struct addrinfo hints;
memset(&hints, 0, sizeof(hints));
hints.ai_family = AF_INET;
hints.ai_socktype = SOCK_STREAM;
//‘hints’ is an optional pointer to a struct addrinfo, as defined by . This structure can be used to provide hints concerning the type of socket that the caller supports or wishes to use. – from the FreeBSD man page.
//Initialize a pointer for the server_address that we will obtain from the server.
//Now, call “getaddrinfo(tIP, tport, &hints, &serv_addr)” with proper parameters. The getaddrinfo() function allocates and initializes a linked list of addrinfo structures, one for each network address that matches node and service, subject to any restrictions imposed by hints, and returns a pointer to the start of the list in the 4th paraments, in this case “serv_addr”. The items in the linked list are linked by the ai_next field.
//Additional  Info:
//There are several reasons why the linked list may have more than one addrinfo structure, including: the network host is multihomed, accessible over multiple protocols (e.g., both AF_INET and AF_INET6); or the same service is available from multiple socket types (one SOCK_STREAM address and another SOCK_DGRAM address, for example).
//Normally, the application should try using the addresses in the order in which they are returned.

//Step 3: Connecting against the sockets
//Traverse through all the addrinfo received in the linked list, and create a socket. The values for the “socket()” are present in the addrinfo struct obtained above. (Each node of the linked_list is traversed using the pointer “temp”.)
sockfd = socket(temp->ai_family, temp->ai_socktype, 
                temp->ai_protocol);
if (sockfd < 0) 
{
     printf("Port %d is NOT open.\n", port);
     continue; 
}
//If the socket creation fails, then try using the values in other nodes. Once socket creation succeeds, try connecting to it using the “connect()”. If the connection is a success, then congratulations, the socket is OPEN, else try with the other addrinfo nodes. If none of them works from the linked_list, then the socket is CLOSED. Here is the code for the same,

status = connect(sockfd, temp->ai_addr, 
                 temp->ai_addrlen);
if (status<0) 
{
    printf("Port %d is NOT open.\n", port);
    close(sockfd);
    continue;
}

printf("Port %d is open.\n", port);
close(sockfd);