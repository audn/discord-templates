
@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')
  @include('_partials.header')


    @section('title', ' Discord Templates')

    {{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
    @section('body')
    <div class="container center-div">
      <div class="row valign-wrapper no-valign-wrap-on-mobile">
        <div class="col s12 l19">
          <div class="discord-mockup z-depth-3">
            <div class="items-panel">
              <div class="actions">
                <div class="close"></div>
                <div class="minimize" onclick="minimize"></div>
                <div class="zoom" onclick="zoom"></div>
              </div>
              <script>
              </script>
              @include('_partials.nav')
            </div>
            <div class="sidebar-panel hide-on-med-and-down">
              <div class="header">Discord Templates</div>
              <div class="items" id="items">
                <div class='all-slides'>
                 <div class='slides'>
                <div class="category" id="category">
                  <svg class="iconCollapsed-3hFp_8 iconTransition-2pOJ7l directionRight-O8AY4M" width="12" height="12" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 10L12 15 17 10"></path>
                  </svg>
                  <img src="https://discordapp.com/assets/e4d52f4d69d7bba67e5fd70ffe26b70d.svg" class="emoji jumboable" alt=":star:" draggable="false"> Text Channels
                  <svg style="float:right;" name="PlusAlt" class="addButtonIcon-3u-3Hu" width="18" height="18" viewBox="0 0 18 18">
                  <polygon fill-rule="nonzero" id="category-plus" class="category-expand" fill="#6d6e71" points="15 10 10 10 10 15 8 15 8 10 3 10 3 8 8 8 8 3 10 3 10 8 15 8">
                  </polygon>
                </svg>
               </div>

               <a href="#" style="width:220px;top:30px;">
                  <div class="item trigger-group active mt-32" data="default">general</div>
                </a>
                <a href="#" style="width:220px;top:60px;">
                  <div class="item trigger-group locked" data="tutorial">tutorial</div>
                </a>
                <a href="https://discordapp.com/api/oauth2/authorize?client_id=559210540476530720&permissions=8&scope=bot" target="_blank" style="width:220px;top:90px;">
                  <div class="item trigger-group locked" data="invite">invite-bot</div>
                </a>
                <a href="#" style="width:220px;top:120px;">
                  <div class="item trigger-group locked " data="startup">startup</div>
                </a>
                <a href="#" style="width:220px;top:150px;">
                  <div class="item trigger-group" data="git">changes</div>
                </a>
                <a href="#" style="width:220px;top:180px;">
                  <div style="display:none" class="item trigger-group locked" data="partner">Partner</div>
                </a>
              </div>
             </div>
             <!-- elements under this div, is not slide"able"-->
             <div class="category" id="category">
               <svg class="iconCollapsed-3hFp_8 iconTransition-2pOJ7l directionRight-O8AY4M" width="12" height="12" viewBox="0 0 24 24">
                 <path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 10L12 15 17 10"></path>
               </svg>
               <img src="https://discordapp.com/assets/e770e7da3fb872af10856268118a6e34.svg" class="emoji jumboable" alt=":star:" draggable="false"> Website related
               <svg style="float:right;" name="PlusAlt" class="addButtonIcon-3u-3Hu" width="18" height="18" viewBox="0 0 18 18">
               <polygon fill-rule="nonzero" id="category-plus" class="category-expand" fill="#6d6e71" points="15 10 10 10 10 15 8 15 8 10 3 10 3 8 8 8 8 3 10 3 10 8 15 8">
               </polygon>
             </svg>
            </div>

            <a href="#" style="width:220px;top:30px;">
               <div class="item trigger-group" data="default">support</div>
             </a>
             <a href="#" style="width:220px;top:30px;">
                <div class="item trigger-group" data="default">bugs</div>
              </a>
              <a href="#" style="width:220px;top:30px;">
                 <div class="item trigger-group" data="default">known-issues</div>
               </a>

               <a href="#" class="absolute" style="width:220px;top:30px;">
                 <a href="#" style="width:220px;top:30px;bottom:0;">
                    <div class="relative" style="margin-top:190px;position:fixed;background:#292b2f;padding:10px;margin-left: -10px;width: 240px;"data="default">
                    <div class="icon pfp column">
    	                 <img class="responsive-img float-left" src="/img/audun.png" style="border-radius:50%;margin-right:10px;width:32px;">
    	                </div>
                      <div class="user-name text-white font-bold">audn </div>
                      <font style="color:#999b9c;font-size:10px;">#0001</font>
                    </div>
                  </a>
                </a>

            </div>
          </div>
            <div class="messages-panel">
              <div class="messages-group hide-unless-show" id="default">
                <div class="header">general</div>
                <div class="messages">
                  <div class="message" style="border: 1px solid transparent;">
                     <div class="body" style="margin-left:60px;">
                       <div class="wrappers">
                       <div class="content" style="text-align:left;">
                         <img src="/img/wumpus.png" class="w-64">
                         <p>
                         <br>
                         <h4 class="text-white font-bold text-3xl">Get pre-made templates!</h4>
                         <p>
                           <br>
                           We all hate to add tons of text-channels in our Discord server, and find fancy symbols to use.. right? That's why we're introducing <strong>discord.style</strong>
                           <div style="margin-top:25px;">

                       </div>
                     </div>
                   </div>
                    <ul class="templateMenu">
                      <li><a class="activetwo templateMenu" href="#">Featured</a></li>
                      <li><a class="border-animation templateMenu"href="#">Streamers</a></li>
                      <li><a class="border-animation templateMenu"href="#">School</a></li>
                      <li><a class="border-animation templateMenu"href="#">Memes</a></li>
                      <li><a class="border-animation templateMenu"href="#">Anime</a></li>
                      <li style="float:Right;"><a class="border-animation templateMenu"href="#">See all templates</a></li>
                    </ul>
                    <div class="stock">
                      <div class="stockopacity">Pewdipie</div>
                      <div class="stockphoto" style="background-image: url(https://66.media.tumblr.com/8979dc941cefba152c8303742003352a/tumblr_otpzv7Z6Kl1wr03doo2_250.png);">
                        &nbsp;
                      </div>
                      <div class="info">
                          <span id="title">Pewdiepie</span>
                          <span id="content">Copy of Pewdiepie official Discord server!</div>
                      </div>

                      <div class="stock">
                        <div class="stockopacity">Twitch Streamer</div>
                        <div class="stockphoto">
                          &nbsp;
                        </div>
                        <div class="info">
                          <span id="title">Twitch Streamer</span>
                            <span id="content">A perfect template for Twitch Streamers!</div>
                        </div>


                        <div class="stock">
                          <div class="stockopacity">Shroud</div>
                          <div class="stockphoto" style="background-image: url(https://i.kym-cdn.com/entries/icons/facebook/000/031/613/shroud-on-twitchoverparty-streamers-leaving-for-mixer-more.jpg);">
                            &nbsp;
                          </div>
                          <div class="info">
                            <span id="title">Shroud</span>
                            <span id="content">Copy of Shourds official Discord server!</div>
                        </div>

                  </div>
                </div>
              </div>
              </div>
              <div class="messages-group hide-unless-show" id="tutorial">
                <div class="header">tutorial</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="/img/audun.png"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">
                        <div class="body">
                          <strong>Streamer templates!</strong><br>
                          Tutorial
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-group hide-unless-show" id="invite">
                <div class="header">invite-bot</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="/img/audun.png"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">
                        <div class="body">
                          <strong>Community templates!</strong><br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-group hide-unless-show" id="startup">
                <div class="header">streamer</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="/img/audun.png"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">
                        <div class="body">
                          <strong>Startup templates!</strong><br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-group hide-unless-show" id="add-server">
                <div class="header">Adding server</div>
                <div class="messages">
                  <div class="message" style="border: 0px !important;margin-top: 4rem;">
                    <div class="body">
                      <div class="wrapper">
                      <div class="content" style="text-align:center;">
                        <img src="/img/welcome.png" class="w-64">
                        <p>
                        <br>
                        <h4 class="text-white font-bold text-3xl">Make your own template!</h4>
                        <p>
                          <br>
                          Customize your own server on our website! Just add a channel, rename it to whatever you'd like, and click the big green button when done!

                          <p>

                          <div class="content" style="margin-top:25px;">

                            <div class="select">
                              <div id="text">
                                <i class="fas fa-gamepad-alt iconio">iconCollapsed</i>
                                <p>
                                  <span id="type">
                                      <i class="fas fa-gamepad-alt iconios">ss</i>
                                  </span>
                                  <div style="clear:both";>&nbsp;</div>
                              </div>
                            </div>

                            <div class="select">
                              <div id="text">
                                <i class="fas fa-gamepad-alt iconio">iconCollapsed</i>
                                <p>
                                  <span id="type">
                                      <i class="fas fa-gamepad-alt iconios">ss</i>
                                  </span>
                                  <div style="clear:both";>&nbsp;</div>
                              </div>
                            </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
