tags: foss, linux, skype, webcam

# Skype webcam problem (/usr/lib/libv4l/v4l2convert.so solved)

If you have problems with the webcam in skype with Linux, you may have read that you need to run skype with:

        LD_PRELOAD=/usr/lib/libv4l/v4l2convert.so skype

However, you may get the message:

        ERROR: ld.so: object '/usr/lib/libv4l/v4l2convert.so' from LD_PRELOAD cannot be preloaded: ignored.

Then try running instead:

        LD_PRELOAD=/usr/lib/i386-linux-gnu/libv4l/v4l2convert.so skype

This is caused by the new [Multiarch support](http://packages.debian.org/changelogs/pool/main/v/v4l-utils/v4l-utils_0.8.5-1/changelog) in Debian.
