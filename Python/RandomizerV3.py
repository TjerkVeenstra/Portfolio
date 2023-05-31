import random

songs = ["Song1","Song2","Song3","Song4","Song5","Song6","Song7","Song8","Song9","Song10"]
playedSongs = []
lastSong = int()
while True:
    input("press Enter to play a song")
    while songs[lastSong] in playedSongs:
        lastSong = random.randint(0, len(songs)-1)
    if len(playedSongs) == 5:
        playedSongs.pop(0)
    playedSongs.append(songs[lastSong])
    print(songs[lastSong])
    print(playedSongs)