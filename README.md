brickcity
=========

WebGL Music Viz for Mashable sponsored by Intel 2-1s.

This repo is a war zone. Comments are awul, code is rushed (and ugly) and I remembered why I stopped writing JS.

On a lighter note, this was fun, and some people enjoyed using it and see benefits from developing it further, so without further ado...

To-do List
----------

* I was in the process of porting Minim's Processing/Java library to JS so that I could have a better handle over drawing the big beats, using BeatDetector and isSnare() and isKick() since my code is garbage and gets the basics but misses a lot of good notes. DSP/FFT experts feel free to chime in.
* UI is flat and uninspired, and I haven't added any movement 
* Add drop-down selector to intial load process if geolocation fails or is denied by a user. Right now you have to allow it, and then you're able to change in with the dropdown on the bottom right when music starts.
* Break the data/3d load up into a loop so it doesn't lock up creating 600+ objects all at once.
* Learn to code properly.

In all honesty this was a lot of fun, and if people want to pitch in to make something cooler, then I'm all for it. If no one ever sees this page either, that's fine too. Thanks to Lauren @ Mashable for the opportunity. Back to Android and Oculus for now...
