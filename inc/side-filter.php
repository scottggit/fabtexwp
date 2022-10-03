<div class="filter-container">
    <span class="filter-toggle-close">
        <svg width="32px" height="32px" viewBox="0 0 72 72" id="emoji" xmlns="http://www.w3.org/2000/svg">
            <g id="line">
                <line x1="17.5" x2="54.5" y1="17.5" y2="54.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                <line x1="54.5" x2="17.5" y1="17.5" y2="54.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
            </g>
        </svg>
    </span>
    <div class="d-flex justify-content-between mb-4">
        <h3 class="text-[24px]">Filter By</h3>
        <span class="text-[14px]">CLEAR ALL</span>
    </div>
    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
        <p class="filter-title text-dark"><strong>Application</strong></p>
        <ul class="filter-input-container mt-3">
            <li class="mb-2">
                <input type="checkbox" name="application" id="blinds">
                <label for="blinds">Blinds (22)</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="application" id="draperies">
                <label for="draperies">Draperies (4)</label>
            </li>
            <li class="">
                <input type="checkbox" name="application" id="roller_shades">
                <label for="roller_shades">Roller Shades (15)</label>
            </li>
        </ul>
    </div>
    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
        <p class="filter-title text-dark"><strong>Material</strong></p>
        <ul class="filter-input-container mt-3">
            <li class="mb-2">
                <input type="checkbox" name="material" id="linen">
                <label for="linen">Linen & Natural Weaves</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="material" id="Papel">
                <label for="Papel">Papel</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="material" id="Polyester">
                <label for="Polyester">Polyester</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="material" id="Sheers">
                <label for="Sheers">Sheers</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="material" id="Silk">
                <label for="Silk">Silk</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="material" id="Synthetic">
                <label for="Synthetic">Synthetic</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="material" id="Velvet">
                <label for="Velvet">Velvet</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="material" id="Vinyl">
                <label for="Vinyl">Vinyl</label>
            </li>
            <li class="">
                <input type="checkbox" name="material" id="Wool">
                <label for="Wool">Wool & Wool Mixes</label>
            </li>
        </ul>
    </div>
    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
        <p class="filter-title text-dark"><strong>Maximum Width</strong></p>
        <ul class="filter-input-container mt-3">
            <li class="mb-2">
                <input type="checkbox" name="max_width" id="max_width_54">
                <label for="max_width_54">54”</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="max_width" id="max_width_72">
                <label for="max_width_72">72”</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="max_width" id="max_width_94">
                <label for="max_width_94">94”</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="max_width" id="max_width_110">
                <label for="max_width_110">110”</label>
            </li>
            <li class="">
                <input type="checkbox" name="max_width" id="max_width_118">
                <label for="max_width_118">118”</label>
            </li>
        </ul>
    </div>
    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
        <p class="filter-title text-dark"><strong>Patterns & Textures</strong></p>
        <ul class="filter-input-container mt-3">
            <li class="mb-2">
                <input type="checkbox" name="patterns" id="Solids">
                <label for="Solids">Solids</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="patterns" id="Patterned">
                <label for="Patterned">Patterned</label>
            </li>
            <li class="">
                <input type="checkbox" name="patterns" id="Texture">
                <label for="Texture">Texture</label>
            </li>
        </ul>
    </div>
    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
        <p class="filter-title text-dark"><strong>Fabric Type</strong></p>
        <ul class="filter-input-container mt-3">
            <li class="mb-2">
                <input type="checkbox" name="fabric_type" id="Blackout">
                <label for="Blackout">Blackout</label>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="fabric_type" id="UV_Printed">
                <label for="UV_Printed">UV Printed</label>
            </li>
            <li class="">
                <input type="checkbox" name="fabric_type" id="Woven">
                <label for="Woven">Woven</label>
            </li>
        </ul>
    </div>
    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm filter-openness_range">
        <p class="filter-title text-dark"><strong>Openness</strong></p>
        <ul class="filter-input-container mt-3">
            <p class="openness_range_label d-flex justify-content-between">
                <span>0%</span>
                <span>5%</span>
                <span>10%</span>
            </p>
            <input type="range" min="0" max="10" value="2" id="fader" step="1">
        </ul>
    </div>
    <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
        <p class="filter-title text-dark"><strong>Color</strong></p>
        <ul class="mt-3 color-selected">
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_1">
                <label for="color_1"><span class="light-netural"></span></label>
                <span class="color_title">Light Neturals</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_2">
                <label for="color_2"><span class="black-gray"></span></label>
                <span class="color_title">Blacks/Grays</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_3">
                <label for="color_3"><span class="tan-taupe"></span></label>
                <span class="color_title">Tan/Taupes</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_4">
                <label for="color_4"><span class="green"></span></label>
                <span class="color_title">Greens</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_5">
                <label for="color_5"><span class="blue"></span></label>
                <span class="color_title">Blues</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_6">
                <label for="color_6"><span class="metalic"></span></label>
                <span class="color_title">Metalics</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_7">
                <label for="color_7"><span class="multi-color"></span></label>
                <span class="color_title">Multi-color</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_8">
                <label for="color_8"><span class="white"></span></label>
                <span class="color_title">Whites</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_9">
                <label for="color_9"><span class="brown"></span></label>
                <span class="color_title">Browns</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_10">
                <label for="color_10"><span class="red"></span></label>
                <span class="color_title">Red</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_11">
                <label for="color_11"><span class="orange"></span></label>
                <span class="color_title">Oranges</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_12">
                <label for="color_12"><span class="yellow"></span></label>
                <span class="color_title">Yellows</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_13">
                <label for="color_13"><span class="purple"></span></label>
                <span class="color_title">Purples</span>
            </li>
            <li class="mb-2">
                <input type="checkbox" name="color_selected" id="color_14">
                <label for="color_14"><span class="pink"></span></label>
                <span class="color_title">Pinks</span>
            </li>
        </ul>
    </div>
</div>