2
    2.1 git checkout C4
    2.2 git checkout bugFix
        git checkout HEAD^
    2.3 GIT BRANCH -F MAIN C6
        git checkout HEAD~1
        GIT BRANCH -F BUGfIX C6 HEAD ~1
    2.4 git reset C1
        git checkout pushed
        git revert C2

3 
    3.1 git cherry-pick C3 C4 C7
    3.2 git rebase -i HEAD~4

4
    4.1 git rebase -i main
        ornedar c4 el primero y borrar los otros
        git rebase bugFix main

    4.2 git rebase -i HEAD~2 (ordenar 3 y 2)
        git commit --amend
        git rebase -i HEAD~2(ordenar 2 y 3)
        git rebase caption main