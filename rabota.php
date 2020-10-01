Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git log
commit 50a546a35670312c4fb75cd873055dfde97f1900 (HEAD -> master)
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:58:05 2020 +0900

    secondcommit

commit dced375e0e3c01807a73f947486df7a616ac637e
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:52:15 2020 +0900

    commit

commit bdee89c14f90575d66d3871ad039918773b7cc39
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:48:54 2020 +0900

    add files

commit cd6d9aaab36455f17226bf66bcb0987239e75c9e
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:45:02 2020 +0900

    init

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git help log

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git log --pretty-format:"%h - %an, %ar : %s"
fatal: unrecognized argument: --pretty-format:%h - %an, %ar : %s

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git log --pretty=format:"%h - %an, %ar : %s"
50a546a - Stanislav, 5 minutes ago : secondcommit
dced375 - Stanislav, 11 minutes ago : commit
bdee89c - Stanislav, 15 minutes ago : add files
cd6d9aa - Stanislav, 19 minutes ago : init

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git log --since=2.weeks
commit 50a546a35670312c4fb75cd873055dfde97f1900 (HEAD -> master)
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:58:05 2020 +0900

    secondcommit

commit dced375e0e3c01807a73f947486df7a616ac637e
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:52:15 2020 +0900

    commit

commit bdee89c14f90575d66d3871ad039918773b7cc39
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:48:54 2020 +0900

    add files

commit cd6d9aaab36455f17226bf66bcb0987239e75c9e
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:45:02 2020 +0900

    init

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git log -p -2
commit 50a546a35670312c4fb75cd873055dfde97f1900 (HEAD -> master)
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:58:05 2020 +0900

    secondcommit

diff --git a/f4.php b/f4.php
index e4ff604..227a674 100644
--- a/f4.php
+++ b/f4.php
@@ -1,2 +1,4 @@
 <?php
-echo "Hello Git:";
\ No newline at end of file
+echo "Hello Git:";
+ asd
+  asd
\ No newline at end of file

commit dced375e0e3c01807a73f947486df7a616ac637e
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:52:15 2020 +0900

    commit

diff --git a/f4.php b/f4.php
index e69de29..e4ff604 100644
--- a/f4.php
+++ b/f4.php
@@ -0,0 +1,2 @@
+<?php
+echo "Hello Git:";
\ No newline at end of file
diff --git a/htdocs/index.php b/htdocs/index.php
index 35abd53..ba72905 100644
--- a/htdocs/index.php
+++ b/htdocs/index.php
@@ -1,4 +1,4 @@
 <?php

 echo "Hello Git:";
-echo "Hello Git2:";
\ No newline at end of file
+echo "Hello Git3:";
\ No newline at end of file

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git status
On branch master
Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        modified:   f4.php

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   f4.php


Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git add *.php

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git commit
Aborting commit due to empty commit message.

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git log
commit 50a546a35670312c4fb75cd873055dfde97f1900 (HEAD -> master)
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:58:05 2020 +0900

    secondcommit

commit dced375e0e3c01807a73f947486df7a616ac637e
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:52:15 2020 +0900

    commit

commit bdee89c14f90575d66d3871ad039918773b7cc39
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:48:54 2020 +0900

    add files

commit cd6d9aaab36455f17226bf66bcb0987239e75c9e
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:45:02 2020 +0900

    init

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git commit
[master cc7f021] comment with notepad++
 1 file changed, 3 insertions(+), 1 deletion(-)

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$ git log
commit cc7f02121e5a4d15e55856b2f50dd0f5a686b69f (HEAD -> master)
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 14:11:26 2020 +0900

    comment with notepad++

commit 50a546a35670312c4fb75cd873055dfde97f1900
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:58:05 2020 +0900

    secondcommit

commit dced375e0e3c01807a73f947486df7a616ac637e
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:52:15 2020 +0900

    commit

commit bdee89c14f90575d66d3871ad039918773b7cc39
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:48:54 2020 +0900

    add files

commit cd6d9aaab36455f17226bf66bcb0987239e75c9e
Author: Stanislav <sit.stas14@mail.ru>
Date:   Wed Sep 30 13:45:02 2020 +0900

    init

Станислав@LAPTOP-ACRJ8MT5 MINGW64 /c/low (master)
$
