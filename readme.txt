
First launch:

composer install
npm install
php artisan storage:link
php artisan key:generate




When want to push updates

git stash
[ Pull in changes from master branch ]
git stash apply
[ Resolve conflicts if needed ]
[ Commit and push update to master branch  !Warning: make sure not to commit anything from the .idea folder! ]



When pulling updates
    If local changes are made:

    git stash
    [ Pull in changes from master branch ]
    git stash apply
    [ Resolve conflicts if needed ]


    If there are no local changes:
    [ Pull in changes from master branch ]




How to access files from BE?

<img src="/storage/{{ $project->image }}" alt="img">