tags: foss, wine


# Wine and MimeType associations

I recently installed a *Wine* application which associated itself to the *.dat* extension. I tried uninstalling the application to get rid of the association, but the uninstaller did not remove it.

The next thing I tried was:
 1. Open Nautilus
 2. Right click on a *.dat* file, Properties
 3. Click on the *Open With* tab and click *Remove*.

I could unset the default application, but the "file type" and the icon was still not right.

Then I found out the directory `~/.local/share/mime/application`. I removed the file corresponding to `x-wine-extension-dat.xml` and I executed `update-mime-database ~/.local/share/mime/`.

I don't know how, but I believe that wine can recreate the removed file based on the information stored in the Wine Windows registry.

Therefore, I executed `wine ~/.wine/drive_c/windows/regedit.exe` I looked for `.dat` and similar associations at `HKEY_CLASSES_ROOT` and I deleted those keys.

Finally I think that the problem is solved.
