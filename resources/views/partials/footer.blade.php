<div id="footerTop">

    <div class="block-sin">
        <div class="listLinks">
            <!-- Prima lista -->
            <div>
                <ul>
                    <h3>DC Comics</h3>
                    <li>
                        @foreach ($arrayDCComics as $item)
                        <a href="#">{{$item}}</a>
                        @endforeach
                    </li>
                </ul>
                <ul>
                    <h3>Shop</h3>
                    <li>
                        @foreach ($arrayShop as $item)
                        <a href="#">{{$item}}</a>
                        @endforeach
                    </li>
                </ul>
            </div>

            <!-- Seconda Lista -->
            <div>
                <ul>
                    <h3>DC</h3>
                    <li>
                        @foreach ($arrayDC as $item)
                        <a href="#">{{$item}}</a>
                        @endforeach
                    </li>
                </ul>
            </div>

            <!-- Terza Lista -->
            <div>
                <ul>
                    <h3>SITES</h3>
                    <li>
                        @foreach ($arraySites as $item)
                        <a href="#">{{$item}}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>

        <p>All Site Content TM and &#x000A9; 2020 DC Entertainment, unless otherwise <span>noted here</span>. All rights reserved. <span>Cooking
            Settings</span></p>
    </div>

    <div class="bg-logo"></div>
</div>
