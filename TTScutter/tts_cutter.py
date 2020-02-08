from pydub import AudioSegment
from pydub.silence import split_on_silence

sound = AudioSegment.from_mp3("korean.mp3")
chunks = split_on_silence(sound, 
    # must be silent for at least half a second
    min_silence_len=500,

    # consider it silent if quieter than -16 dBFS
    silence_thresh=-16
)
