import tkinter
import os
from tkinter import *

# To get the space above for message
from tkinter.messagebox import *

# To get the dialog box to open when required
from tkinter.filedialog import *

'''Note : messagebox is used to write the message in the white box called notepad
and filedialog is used for the dialog box to appear when you are opening file
from anywhere in your system or saving your file in a particular position or
place.'''
#===================================================================================================================
#Adding menu:
# Add controls(widget)
self.__thisTextArea.grid(sticky = N + E + S + W)

# To open new file
self.__thisFileMenu.add_command(label = "New",
								command = self.__newFile)

# To open a already existing file
self.__thisFileMenu.add_command(label = "Open",
								command = self.__openFile)

# To save current file
self.__thisFileMenu.add_command(label = "Save",
								command = self.__saveFile)

# To create a line in the dialog
self.__thisFileMenu.add_separator()

# To terminate
self.__thisFileMenu.add_command(label = "Exit",
								command = self.__quitApplication)
self.__thisMenuBar.add_cascade(label = "File",
							menu = self.__thisFileMenu)

# To give a feature of cut
self.__thisEditMenu.add_command(label = "Cut",
								command = self.__cut)

# To give a feature of copy
self.__thisEditMenu.add_command(label = "Copy",
								command = self.__copy)

# To give a feature of paste
self.__thisEditMenu.add_command(label = "Paste",
								command = self.__paste)

# To give a feature of editing
self.__thisMenuBar.add_cascade(label = "Edit",
							menu = self.__thisEditMenu)

# To create a feature of description of the notepad
self.__thisHelpMenu.add_command(label = "About Notepad",
								command = self.__showAbout)
self.__thisMenuBar.add_cascade(label = "Help",
							menu = self.__thisHelpMenu)

self.__root.config(menu = self.__thisMenuBar)

self.__thisScrollBar.pack(side = RIGHT, fill = Y)

# Scrollbar will adjust automatically
# according to the content
self.__thisScrollBar.config(command = self.__thisTextArea.yview)
self.__thisTextArea.config(yscrollcommand = self.__thisScrollBar.set)

'''With this code we will add the menu in the windows of our notepad and will add the things like copy, paste, save etc, to it.'''
#=====================================================================================================================================
#Adding The Functionality :
def __quitApplication(self):
	self.__root.destroy()
	# exit()

def __showAbout(self):
	showinfo("Notepad", "Mrinal Verma")

def __openFile(self):
		
	self.__file = askopenfilename(defaultextension=".txt",
								filetypes=[("All Files","*.*"),
									("Text Documents","*.txt")])

	if self.__file == "":

		# no file to open
		self.__file = None
	else:
		# try to open the file
		# set the window title
		self.__root.title(os.path.basename(self.__file) + " - Notepad")
		self.__thisTextArea.delete(1.0,END)

		file = open(self.__file,"r")

		self.__thisTextArea.insert(1.0,file.read())

		file.close()

		
def __newFile(self):
	self.__root.title("Untitled - Notepad")
	self.__file = None
	self.__thisTextArea.delete(1.0,END)

def __saveFile(self):

	if self.__file == None:
		#save as new file
		self.__file = asksaveasfilename(initialfile='Untitled.txt',
										defaultextension=".txt",
										filetypes=[("All Files","*.*"),
											("Text Documents","*.txt")])

		if self.__file == "":
			self.__file = None
		else:
			
			# try to save the file
			file = open(self.__file,"w")
			file.write(self.__thisTextArea.get(1.0,END))
			file.close()
			# change the window title
			self.__root.title(os.path.basename(self.__file) + " - Notepad")
				
			
	else:
		file = open(self.__file,"w")
		file.write(self.__thisTextArea.get(1.0,END))
		file.close()

def __cut(self):
	self.__thisTextArea.event_generate("<<Cut>>")

def __copy(self):
	self.__thisTextArea.event_generate("<<Copy>>")

def __paste(self):
	self.__thisTextArea.event_generate("<<Paste>>")

	'''In this we have added all the functionality that is required in the notepad, you can add other functionality too in this like the font size, font color, bold, underlined, etc.'''

	