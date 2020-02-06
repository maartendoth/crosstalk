# crosstalk
Currently only korean


## auto competion:
In the korean/crosstalk.csv file, the columns: unique number, * audio, and images don't need manual editing.

**for the audio and images i use:**

korean audio

=IF(NOT(ISBLANK(E2)); "[sound:"&E2&".mp3]"; "" )

dutch audio	

=IF(NOT(ISBLANK(G2)); "[sound:"&G2&".mp3]"; "" )

images

=IF(NOT(ISBLANK(D2)); "[image:"&D2&".png]"; "" )

The note_ids are only of important when processing the final results. But are for now it doesn't matter if the get messed up or missing.

## website
each *.csv will be listed as an separate flashcard deck at https://omniglot.nl/flashcards

## ToDo list
- create a program to split the TTS audio file per phrase.
- play with [Leitner learning method](https://github.com/certificationy/flashcards) to see if its usefull enough to incorparate.


## github

You are also studying korean, and found this list, and like to help, but are not sure wat github is or how to use it? 

first of all, you don't need a account if you only want to download stuff.
You only need an account if you would like to directly upload stuff. but if you only want to download stuff, there are many ways to do this.

if you have "git" installed on your computer, you can "clone" the repository with that program. [how to clone](https://www.howtogeek.com/451360/how-to-clone-a-github-repository/) 

if you don't have nor want to install git. you can click on the "Clone or download" button and then click on "Download ZIP" then you will download all files.

or if you just want to download a file, you can right click on the file you want to download and select "Save link As..."

Github is a collaboration tool, that lets everyone download the files in a repository to their computer, and then when they added or changed some files, there is the option to upload those files back to the same repository. but this collaboration feature only works if you "clone" the repository)