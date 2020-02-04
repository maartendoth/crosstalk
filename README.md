# crosstalk
Currently only korean


## auto competion:
In the korean/crosstalk.csv file, the columns: unique number, * audio, and images don't need manual editing.

**for the audio and images i use:**

korean audio

=IF(NOT(ISBLANK(E2)); "[sound:"&E2&".mp3]"; "" )

dutch audio	

=IF(NOT(ISBLANK(G47)); "[sound:"&G47&".mp3]"; "" )

images

=IF(NOT(ISBLANK(G47)); "[sound:"&G47&".mp3]"; "" )

The note_ids are only of important when processing the final results. But are for now it doesn't matter if the get messed up or missing.
