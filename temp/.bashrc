# .bashrc
[[ $- != *i* ]] && return


# if [ -f ~/.bash_aliases ];
 #then
# . ~/.bash_aliases
# fi

force_color_prompt=yes

if [ -n "$force_color_prompt" ];
 then
    if [ -x /usr/bin/tput ] && tput setaf 1 >&/dev/null; then
        # We have color support; assume it's compliant with Ecma-48
        # (ISO/IEC-6429). (Lack of such support is extremely rare, and such
        # a case would tend to support setf rather than setaf.)
        color_prompt=yes
    else
        color_prompt=
    fi
fi


# PS1='\e[33;1m\u@\h: \e[31m\W\e[0m\$ '
TITLEBAR='\[\e]0;\u@\h\a\]'
if [ "$color_prompt" = yes ]; then
    PS1="${TITLEBAR}\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\W\[\033[00m\]\$ "
else
    PS1="${TITLEBAR}\u@\h:\W\$ "
fi

unset color_prompt force_color_prompt

if [ -f ~/bash_aliases ]; then
. ~/bash_aliases
fi




alias ..="cd .."
alias ...="cd ../.."
alias vssh="ssh vagrant@127.0.0.1 -p 2222 --color"
alias h='cd ~'
alias c='clear'
alias artisan='php artisan'

alias phpspec='vendor/bin/phpspec'
alias phpunit='vendor/bin/phpunit'
alias serve=serve-laravel

alias chmod7="chmod 777 -Rf ./"
alias chmod777='sudo chmod 777 -R ./'
alias chmod6="chmod 644"
alias chown="chown apache:apache ./ -R"

alias flay='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/frontend/layouts'
alias fr='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/frontend/'
alias ba='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/'
alias blay='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/layouts/'
alias stage='cd && cd /var/www/vhosts/gracecompany/stage.grace/'
alias http='cd && cd /var/www/vhosts/gracecompany/stage.grace/app/Http/'
alias mig='cd && cd /var/www/vhosts/gracecompany/stage.grace/database/migrations/'
alias controller='cd && cd /var/www/vhosts/gracecompany/stage.grace/app/Http/Controllers'
alias blayout='subl /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/layout/layout.blade.php'
alias barticle='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/article/'
alias bmenu='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/menu/'
alias bpage='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/page/'
alias bfaq='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/faq/'
alias bnews='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/news/'
alias bproducts='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/products/'
alias bprofiles='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/profiles/'
alias bsettings='cd && cd /var/www/vhosts/gracecompany/stage.grace/resources/views/backend/settings/'
alias modal='subl /var/www/vhosts/gracecompany/stage.grace/public/backend/assets/js/ui-modals.js'
alias rout='subl /var/www/vhosts/gracecompany/stage.grace/app/Http/routes.php'
alias model='cd && cd /var/www/vhosts/gracecompany/stage.grace/app/Models'

alias snapshot='vagrant snapshot save '
alias restore='vagrant snapshot restore '
alias snaplist='vagrant snapshot list'
alias delsnap='vagrant halt && vagrant snapshot delete '

alias restarta='service httpd restart && service httpd reload'
alias restartall='service httpd restart && service httpd reload && service varnish restart && service varnish reload'
alias restartv='service varnish restart && service varnish reload'

alias cu='composer update'
alias ci='composer install'
alias gc='cd ../var/www/vhosts/gracecompany/'
alias edit-host="sudo pico /etc/hosts"
alias stop="vagrant halt"
alias start="vagrant up"
alias reload="vagrant reload"
alias preload="vagrant reload --provision"
alias update='composer update'
alias install='composer install'
alias rc='php artisan route:clear'
alias rl='php artisan route:list'
alias rs='php artisan route:scan'
alias req='composer require'
alias art='php artisan'
alias app:name="php artisan app:name"
alias long="ls –d */"
alias files="ls -1"
alias all="ls -al"
alias publish="php artisan vendor:publish"
alias seed="php artisan db:seed"
alias startfast="vagrant up --no-provision"
alias fixstoreage="chmod -R 777 app/storage"
alias mreset="php artisan migrate:reset"
alias resetdb="php artisan migrate:reset && php artisan migrate --seed"

alias dump='composer dumpautoload'
alias optimize='php artisan optimize'
alias configcache='php artisan config:cache'
alias rcache='php artisan route:cache'
alias locate="type -a"
alias rphp="sudo service php7.0-fpm restart"
alias ccc='sudo service php7.0-fpm restart && composer dump-autoload && composer clear-cache && php artisan cache:clear && php artisan route:clear'
alias veryclean='service httpd restart && service httpd reload && service varnish restart && service varnish reload && php artisan cache:clear && php artisan route:clear && composer dump-autoload && composer clear-cache'
alias resphp="sudo service php5-fpm restart"
alias vm="ssh vagrant@127.0.0.1 -p 2222"

alias mkmodel="php artisan make:model"
alias mkseed="php artisan make:seeder"

alias local="vagrant ssh"

alias schema='php artisan make:migration:schema'
alias pivot='php artisan make:migration:pivot'
alias npm='npm --no-bin-links'
alias pda="php artisan dumpautoload"
alias cda="composer dump-autoload -o"

alias migrate="php artisan migrate"
alias tinker="php artisan tinker"
alias l='ls -FlAGh --color=auto'
alias edit-host="sudo pico /etc/hosts"


alias vssh="ssh vagrant@127.0.0.1 -p 2222"
alias ls='ls -Gal --color=auto'

alias create51='composer create-project laravel/laravel=5.1 ./ --prefer-dist'
alias create5='composer create-project laravel/laravel=5.0 ./ --prefer-dist'
alias create='composer create-project laravel/laravel ./ --prefer-dist'

alias ll='ls -alF --color=auto'
alias la='ls -Al --color=auto'
alias l='ls -CFl --color=auto'
alias grep='grep --color=auto'
alias fgrep='fgrep --color=auto'
alias egrep='egrep --color=auto'
alias lss='ls -G --color=auto'
alias ls='ls -alF --color=auto'

alias gst='git status'
alias gl='git pull'
alias gp='git push'
alias gd='git diff | mate'
alias gau='git add --update'
alias gau='git add --update'
alias gca='git commit -v -a'
alias gc='git commit -v'
alias gb='git branch'
alias gba='git branch -a'
alias gco='git checkout'
alias gcob='git checkout -b'
alias gcot='git checkout -t'
alias gcotb='git checkout --track -b'
alias glog='git log'
alias nogit="rm -rf .git"


alias jsb="js-beautify.js"

alias ver='cd versionedwp/'


alias tag='git tag -a '
alias all='ls -l * --color=auto'
alias dir='ls –d --color=auto'
alias dump='composer dumpautoload'
alias ci='composer install'
alias cu='composer update'
alias l='ls -FlAGh --color=auto'
alias gundo='git reset HEAD~ && git clean -df'
alias locate='type -a'
alias long='ls d */ --color=auto'
alias gl="git log --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit"
alias sshkey="cat ~/.ssh/id_rsa.pub | pbcopy && echo 'Copied to clipboard.'"
alias nolargefile='find . -size +10M >> .gitignore'


alias ccc='sudo service php7.0-fpm restart && composer dump-autoload && composer clear-cache && php artisan cache:clear && php artisan route:clear && php artisan view:clear && php artisan config:clear && php artisan debugbar:clear'
alias pub="git push -u origin master"
alias uplive="git push -u origin master"
alias gitt='git status'
alias showremotes="git remote -v"
alias localpub="git push -u origin master"
alias remotes="git remote -v"
alias vc="composer du && php artisan cache:clear && php artisan view:clear && php artisan debugbar:clear && php artisan route:clear && php artisan config:clear && composer dumpautoload"
alias cccv='sudo service php7.0-fpm restart && composer dump-autoload && composer clear-cache && php artisan cache:clear && php artisan route:clear && php artisan view:clear && php artisan config:clear && php artisan debugbar:clear'

alias create='composer create-project laravel/laravel ./ --prefer-dist'

alias subl='subl -f'
alias takeownership='sudo chmod 777 -Rf ./'
alias comm='git commit -a -m '
alias fstat='git status -uno'
alias stat='git status'

alias all="ls -l * --color=auto"
alias app:name='php artisan app:name'

alias bashy='. ./.bash_profile'
alias br='branch'

alias gau='git add --update'
alias gc='cd ../var/www/vhosts/gracecompany/'
alias gca='git commit -v -a'
alias gcm='git commit -m \"$1\"'
alias glog='git log --pretty=format:"%h %s" --graph'
alias gup='git commit --amend -m "update refresh"'

alias install='composer install'

alias vssh='vagrant ssh'
alias nogit="rm -rf .git"
alias dump='composer dumpautoload'

alias installx='sudo pecl install xdebug'
alias rstart="sudo /etc/init.d/php7.0-fpm restart"

alias phpfile='php -i > phpinfo.txt'
alias openphpfile='php -i > phpinfo.txt && subl phpinfo.txt'
alias editphpini="sudo chmod 777 -R /etc/php/7.0/ && subl -f /etc/php/7.0/cli/php.ini"
alias openxlog="subl /home/vagrant/gr/grace.reset/xdebug.log"
alias sublpart1='sudo wget -O /usr/local/bin/subl https://raw.github.com/aurora/rmate/master/rmate --no-check-certificate;'
alias sublpart2='sudo chmod +x /usr/local/bin/subl'
alias readphpini="cat /etc/php/7.0/cli/php.ini"

alias rstart="sudo /etc/init.d/php7.0-fpm reload && sudo /etc/init.d/php7.0-fpm restart && sudo /etc/init.d/nginx reload && sudo /etc/init.d/nginx restart"

alias art='php artisan'
alias autoload='composer dump-autoload'
alias xoff='sudo phpdismod -s cli xdebug-cli; sudo /etc/init.d/php7.0-fpm restart'
alias xon='sudo phpenmod -s cli xdebug-cli; sudo /etc/init.d/php7.0-fpm restart'

alias hs='cd ~/Homestead'
alias hssh='cd ~/Homestead && vagrant ssh'
alias chmod7="chmod 777 -Rf ./"
alias chmod777='sudo chmod 777 -R ./'
alias chmod6="chmod 644"
alias chown="chown apache:apache ./ -R"
alias vssh='vagrant ssh'

alias gc='cd ../var/www/vhosts/gracecompany'


alias cc='composer dump-autoload && composer clear-cache && php artisan cache:clear && php artisan route:clear && php artisan view:clear && php artisan config:clear'


alias ccc='composer dump-autoload && composer clear-cache && php artisan cache:clear && php artisan route:clear && php artisan view:clear && php artisan config:clear && service httpd restart && service httpd reload && service varnish restart && service varnish reload &&'

alias rvc='service httpd restart && service httpd reload && service varnish restart && service varnish reload && php artisan cache:clear && php artisan route:clear && composer dump-autoload && composer clear-cache && php artisan view:clear && php artisan debugbar:clear && php artisan config:clear'
alias vc="composer du && php artisan cache:clear && php artisan view:clear && php artisan debugbar:clear && php artisan route:clear && php artisan config:clear && composer dumpautoload"
