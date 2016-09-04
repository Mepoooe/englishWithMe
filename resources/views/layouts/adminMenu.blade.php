<!-- nav -->
            <nav class="cf adminMenu">
                <ul id="nav" class="sf-menu">
                    <li 
                     @if ($_SERVER['REQUEST_URI'] == '/homeAdmin')
                        class="current-menu-item"
                    @endif >
                    <a href="/homeAdmin"><span>HOME</span></a></li>
                    <li><a href="page.html"><span>MATERIALS</span></a>
                        <ul>
                            <li><a href="/texts">Texts</a></li>
                            <li><a href="/videos">Video</a></li>
                            <li><a href="/musics">Musics</a></li>
                            <li><a href="/pictures">Pictures</a></li>
                        </ul>
                    </li>
                    <li
                    @if ($_SERVER['REQUEST_URI'] == '/blogAdmin')
                        class="current-menu-item"
                    @endif >
                    <a href="/blogAdmin"><span>BLOG</span></a></li>
                    <li
                     @if ($_SERVER['REQUEST_URI'] == '/work')
                        class="current-menu-item"
                    @endif >
                    <a href="/work"><span>WORK</span></a></li>
                    <li 
                    @if ($_SERVER['REQUEST_URI'] == '/contact')
                        class="current-menu-item"
                    @endif >
                    <a href="/contact"><span>CONTACT</span></a></li>
                </ul>
                <div id="combo-holder"></div>
            </nav> 
            <!-- ends nav -->