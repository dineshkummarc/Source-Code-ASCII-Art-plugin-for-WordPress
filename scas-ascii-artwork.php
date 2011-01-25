<?php
/*
Part of the Source Code ASCII Art plugin for WordPress
http://www.josscrowcroft.com/swag/source-code-ascii-art/
*/

/*  
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

global $scas_ascii_artwork;

/* Array containing all the ASCII artwork: */
$scas_ascii_artwork = array(

	/* Animals: */
	
	'section_animals' => array( 'name' => __('Animals &amp; Creatures', SCAS_TEXTDOMAIN ) ),
	
	'cat' => array(
		'name' => __('Cat', SCAS_TEXTDOMAIN ),
		'title' => 'O hai ... i\'z in ur src code',
		'output' => "
                                   ,
              ,-.       _,---._ __  / \
             /  )    .-'       `./ /   \
            (  (   ,'            `/    /|
             \  `-'             \'\   / |
              `.              ,  \ \ /  |
               /`.          ,'-`----Y   |
              (            ;        |   '
              |  ,-.    ,-'         |  /
              |  | (   |            | /
              )  |  \  `.___________|/
              `--'   `--'
		"
	),
	
	'cow' => array(
		'name' => __('Cow', SCAS_TEXTDOMAIN ),
		'title' => '\'The cow is of the bovine ilk; one end is moo, the other milk.\' - Ogden Nash',
		'output' => "
                                       /;    ;\
                                   __  \\____//
                                  /{_\_/   `'\____
                                  \___   (o)  (o  }
       _____________________________/          :--'
   ,-,'`@@@@@@@@       @@@@@@         \_    `__\
  ;:(  @@@@@@@@@        @@@             \___(o'o)
  :: )  @@@@          @@@@@@        ,'@@(  `===='
  :: : @@@@@:          @@@@         `@@@:
  :: \  @@@@@:       @@@@@@@)    (  '@@@'
  ;; /\      /`,    @@@@@@@@@\   :@@@@@)
  ::/  )    {_----------------:  :~`,~~;
 ;;'`; :   )                  :  / `; ;
;;;; : :   ;                  :  ;  ; :
`'`' / :  :                   :  :  : :
    )_ \__;      ';'          :_ ;  \_\       `,','
    :__\  \    * `,'*         \  \  :  \   *  8`;'*  *
        `^'     \ :/           `^'  `-^-'   \v/ :  \/
		"
	),

	'bunny' => array(
		'name' => __('Bunny', SCAS_TEXTDOMAIN ),
		'title' => '2011 - totally the Year of the Bunny Rabbit.',
		'output' => "
         / \
        / _ \
       | / \ |
       ||   || _______
       ||   || |\     \
       ||   || ||\     \
       ||   || || \    |
       ||   || ||  \__/
       ||   || ||   ||
        \\_/ \_/ \_//
       /   _     _   \
      /               \
      |    O     O    |
      |   \  ___  /   |
     /     \ \_/ /     \
    /  -----  |  --\    \
    |     \__/|\__/ \   |
    \       |_|_|       /
     \_____       _____/
           \     /
           |     |
		"
	),
	
	'brachiosaurus' => array(
		'name' => __('Brachiosaurus', SCAS_TEXTDOMAIN ),
		'title' => 'Brachiosaurus - Vegetarian Dinosaur FTW',
		'output' => "
     _
   .~q`,
  {__,  \
      \' \
       \  \
        \  \
         \  `._            __.__
          \    ~-._  _.==~~     ~~--.._
           \        '                  ~-.
            \      _-   -_                `.
             \    /       }        .-    .  \
              `. |      /  }      (       ;  \
                `|     /  /       (       :   '\
                 \    |  /        |      /       \
                  |     /`-.______.\     |^-.      \
                  |   |/           (     |   `.      \_
                  |   ||            ~\   \      '._    `-.._____..----..___
                  |   |/             _\   \         ~-.__________.-~~~~~~~~~'''
                .o'___/            .o______}
		"
	),
	
	'unicorn' => array(
		'name' => __('Unicorn', SCAS_TEXTDOMAIN ),
		'title' => 'Behold, the Unicorn!',
		'output' => "
           ,,))))))));,
        __)))))))))))))),
\|/       -\(((((''''((((((((.
-*-==//////((''  .     `)))))),
/|\      ))| o    ;-.    '(((((                                  ,(,
      ( `|    /  )    ;))))'                               ,_))^;(~
         |   |   |   ,))((((_     _____------~~~-.        %,;(;()';'~
         o_);   ;    )))(((` ~---~  `::           \      %%~~)(v;(`('~
               ;    ''''````         `:       `:::|\,__,%%    );`'; ~
              |   _                )     /      `:|`----'     `-'
        ______/\/~    |                 /        /
      /~;;.____/;;'  /          ___--,-(   `;;;/
     / //  _;______;'------~~~~~    /;;/\    /
    //  | |                        / ;   \;;,\
   ((_  | ;                      /',/-----'  _)
    \_| ||_                     //~;~~~~~~~~~
        `\_|                   (,~~
                                \~\
                                 ~~
		"
	),
	
	'alien' => array(
		'name' => __('Alien', SCAS_TEXTDOMAIN ),
		'title' => '\'Do excuse me, my good fellow.\'',
		'output' => "
        __.,,------.._
     ,''   _      _   '`.
    /.__, ._  -=- _'`    Y
   (.____.-.`      ''`   j
    VvvvvvV`.Y,.    _.,-'       ,     ,     ,
        Y    ||,   ''\         ,/    ,/    ./
        |   ,'  ,     `-..,'_,'/___,'/   ,'/   ,
   ..  ,;,,',-''\,'  ,  .     '     ' ''' '--,/    .. ..
 ,'. `.`---'     `, /  , Y -=-    ,'   ,   ,. .`-..||_|| ..
ff\\`. `._        /f ,'j j , ,' ,   , f ,  \=\ Y   || ||`||_..
l` \` `.`.'`-..,-' j  /./ /, , / , / /l \   \=\l   || `' || ||...
 `  `   `-._ `-.,-/ ,' /`'/-/-/-/-'''''`.`.  `'.\--`'--..`'_`' || ,
            '`-_,',  ,'  f    ,   /      `._    ``._     ,  `-.`'//         ,
          ,-''' _.,-'    l_,-'_,,'          '`-._ . '`. /|     `.'\ ,       |
        ,',.,-''          \=) ,`-.         ,    `-'._`.V |       \ // .. . /j
        |f\\               `._ )-.'`.     /|         `.| |        `.`-||-\\/
        l` \`                 '`._   '`--' j          j' j          `-`---'
         `  `                     '`_,-','/       ,-''  /
                                 ,'',__,-'       /,, ,-'
                                 Vvv'            VVv'

		"
	),
	
	'demon' => array(
		'name' => '???',
		'title' => 'Ruuarghrghgh!',
		'output' => "
                                                               _
                                                              _( (~\
       _ _                        /                          ( \) ) \
   -/~/ / ~\                     :;                \       _  ) /(~\/
  || | | /\ ;\                   |l      _____     |;     ( \/    ) )
  _\\)\)\)/ ;;;                  `8o __-~     ~\   d|      \      //
 ///(())(__/~;;\                  '88p;.  -. _\_;.oP        (_._/ /
(((__   __ \\   \                  `),% (\  (\./)8'         ;:'  i
)))--`.'-- (( ;,8 \               ,;%%%:  ./V^^^V'          ;.   ;.
((\   |   /)) .,88  `: ..,,;;;;,-::::::'_::\   ||\         ;[8:   ;
 )|  ~-~  |(|(888; ..``'::::8888oooooo.  :\`^^^/,,~--._    |88::  |
 |\ -===- /|  \8;; ``:.      oo.8888888888:`((( o.ooo8888Oo;:;:'  |
 |_~-___-~_|   `-\.   `        `o`88888888b` )) 888b88888P'''     ;
 ; ~~~~;~~         '`--_`.       b`888888888;(.,'888b888'  ..::;-'
   ;      ;              ~'-....  b`8888888:::::.`8888. .:;;;''
      ;    ;                 `:::. `:::OOO:::::::.`OO' ;;;''
 :       ;                     `.      '``::::::''    .'
    ;                           `.   \_              /
  ;       ;                       +:   ~~--  `:'  -';
                                   `:         : .::/
      ;                            ;;+_  :::. :..;;;
                                   ;;;;;;,;;;;;;;;,;
		"
	),
	
	
	/* Characters: */
		
	'section_characters' => array( 'name' => __('Characters', SCAS_TEXTDOMAIN ) ),
	
	'dilbert' => array(
		'name' => 'Dilbert',
		'title' => '',
		'output' => "
                    (`'`'`'`'`)
                     |       |
                     |       |
                     |       |
    -----..        (()----   |
   |        ||     (_        |
   |        ||       |       |
   |        ||       |       |
   |        ||       /\   ..--
   '--------''   /\  ||-''    \
      /   \      \ \//   ,,   \---.
   .---------.    \./ |~| /__\  \  |
___|_________|__|''-.___ / ||   |  |
|               | .-----'  ||   |  |
|               |CC.-----.      |  |
|               |  '-----'      |  |
                                |  |
		"
	),
	
	'pikachu' => array(
		'name' => 'Pikachu',
		'title' => '',
		'output' => "
quu..__
 $$$b  `---.__
  '$$b        `--.                          ___.---uuudP
   `$$b           `.__.------.__     __.---'      $$$$'              .
     '$b          -'            `-.-'            $$$'              .'|
       '.                                       d'             _.'  |
         `.   /                              ...'             .'     |
           `./                           ..::-'            _.'       |
            /                         .:::-'            .-'         .'
           :                          ::''\          _.'            |
          .' .-.             .-.           `.      .'               |
          : /'$$|           .@'$\           `.   .'              _.-'
         .'|$u$$|          |$$,$$|           |  (            _.-'
         | `:$$:'          :$$$$$:           `.  `.       .-'
         :                  `'--'             |    `-.     \
        :##.       ==             .###.       `.      `.    `\
        |##:                      :###:        |        )     )
        |#'     `..'`..'          `###'        x:      /     /
         \                                   xXX|     /    ./
          \                                xXXX'|    /   ./
          /`-.                                  `.  /   /
         :    `-  ...........,                   | /  .'
         |         ``:::::::'       .            |(    `.
         |             ```          |           x| \ `.:``.
         |                         .'    /'   xXX|  `:`M`M':.
         |    |                    ;    /:' xXXX'|  -'MMMMM:'
         `.  .'                   :    /:'       |-'MMMM.-'
          |  |                   .'   /'        .'MMM.-'
          `'`'                   :  ,'          |MMM(
            |                     `'            |tbap\
             \                                  :MM.-'
              \                 |              .''
               \.               `.            /
                /     .:::::::.. :           /
               |     .:::::::::::`.         /
               |   .:::------------\       /
              /   .''               )::'  /
              `',:                 :    .'
		"
	),
	
	'cookie-monster' => array(
		'name' => 'Cookie Monster',
		'title' => 'Me want cookie!',
		'output' => "
                .---. .---.
               :     : o   :
           _..-:   o :     :-.._
       .-''  '  `---' `---' '   ``-.    
     .'   '   '  '  .    '  . '  '  `.  
    :   '.---.,,.,...,.,.,.,..---.  ' ;
    `. ' `.                     .' ' .'
     `.  '`.                   .' ' .'
      `.    `-._           _.-' '  .'  .----.
        `. '    ''--...--''  . ' .'  .'  o   `.
        .'`-._'    ' .     ' _.-'`. :       o  :
      .'      ```--.....--'''    ' `:_ o       :
    .'    '     '         '     '   ; `.;';';';'
   ;         '       '       '     . ; .' ; ; ;
  ;     '         '       '   '    .'      .-'
  '  '     '   '      '           '    _.-' 
		"
	),
	
	'batman' => array(
		'name' => 'Batman',
		'title' => 'Batman knows you were here',
		'output' => "
                    MMMMMMMMMMMMMMMMMMMMMMM
               MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
           MMMMMMM   M     M       M    M    MMMMMMM
        MMMMMMM   MMM      MM     MM     MMM   MMMMMMM
      MMMMMM   MMMMM       MMMMMMMMM      MMMMM    MMMMM
    MMMMMM  MMMMMMMM       MMMMMMMMM       MMMMMM    MMMMM
   MMMM   MMMMMMMMMM       MMMMMMMMM       MMMMMMMMM   MMMMM
  MMMM  MMMMMMMMMMMMMM    MMMMMMMMMMM     MMMMMMMMMMMM   MMMM
 MMMM  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM  MMMM
MMMM  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM  MMMM
MMMM  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM  MMMM
MMMM  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM  MMMM
 MMMM  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM  MMMM
  MMMM  MMMMMMM     MMMM  MMMMMMMMMMM  MMMM     MMMMMMMMM  MMMM
   MMMM   MMMMM      M      MMMMMMM      M      MMMMMMMM  MMMM
    MMMMM   MMMM             MMMMM             MMMMMM   MMMMM
      MMMMM   MM              MMM              MM    MMMMMM
       MMMMMM   M              M              M   MMMMMMM
         MMMMMMM                                MMMMMMM
            MMMMMMMM                         MMMMMMM
               MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                    MMMMMMMMMMMMMMMMMMMMMMM 
		"
	),
	


	/* Video Games */
	
	'section_videogames' => array ( 'name' => __('Video Games', SCAS_TEXTDOMAIN ) ),
	
	'doom' => array(
		'name' => 'Doom',
		'title' => '',
		'output' => "
+-----------------------------------------------------------------------------+
| |       |\                                           -~ /     \  /          |
|~~__     | \                                         | \/       /\          /|
|    --   |  \                                        | / \    /    \     /   |
|      |~_|   \                                   \___|/    \/         /      |
|--__  |   -- |\________________________________/~~\~~|    /  \     /     \   |
|   |~~--__  |~_|____|____|____|____|____|____|/ /  \/|\ /      \/          \/|
|   |      |~--_|__|____|____|____|____|____|_/ /|    |/ \    /   \       /   |
|___|______|__|_||____|____|____|____|____|__[]/_|----|    \/       \  /      |
|  \mmmm :   | _|___|____|____|____|____|____|___|  /\|   /  \      /  \      |
|      B :_--~~ |_|____|____|____|____|____|____|  |  |\/      \ /        \   |
|  __--P :  |  /                                /  /  | \     /  \          /\|
|~~  |   :  | /                                 ~~~   |  \  /      \      /   |
|    |      |/                        .-.             |  /\          \  /     |
|    |      /                        |   |            |/   \          /\      |
|BM  |     /                        |     |            -_   \       /    \    |
+-----------------------------------------------------------------------------+
|          |  /|  |   |  2  3  4  | /~~~~~\ |       /|    |_| ....  ......... |
|          |  ~|~ | % |           | | ~J~ | |       ~|~ % |_| ....  ......... |
|   AMMO   |  HEALTH  |  5  6  7  |  \===/  |    ARMOR    |#| ....  ......... |
+-----------------------------------------------------------------------------+
		"
	),
	

	/* Food */
	
	'section_food' => array ( 'name' => __('Food', SCAS_TEXTDOMAIN ) ),
	
	'sandwich' => array(
		'name' => 'Sandwich',
		'title' => 'sudo makemeasandwich',
		'output' => "
                    _.---._
                _.-~       ~-._
            _.-~               ~-._
        _.-~                       ~---._
    _.-~                                 ~\
 .-~                                    _.;
 :-._                               _.-~ ./
 `-._~-._                   _..__.-~ _.-~
  /  ~-._~-._              / .__..--~----._
 \_____(_;-._\.        _.-~_/       ~).. . \
    /(_____  \`--...--~_.-~______..-+_______)
  .(_________/`--...--~/    _/           /\
 /-._     \_     (___./_..-~__.....__..-~./
 `-._~-._   ~\--------~  .-~_..__.-~ _.-~
     ~-._~-._ ~---------'  / .__..--~
         ~-._\.        _.-~_/
             \`--...--~_.-~
              `--...--~
		"
	),
	
	/* More */
	
	'section_more' => array ( 'name' => '...more in v1.0!' ),
	
); ?>