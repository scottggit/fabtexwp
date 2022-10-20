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


    <form method="GET">
        <input type="hidden" value="<?php echo $_GET['colors']; ?>" name="colors" >

        <button class="hover:bg-[#262831ab] py-[10px] text-white w-100 mb-4 mt-4 bg-[#262831] rounded-[20px] uppercase text-[15px]" type="submit">Search</button>

        <div class="box bg-white filter-application filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">

            <p class="filter-title text-dark"><strong>Applications</strong></p>
            <ul class="mt-3">
                <?php 
                $applications = array('Bed%20Scarves',
                'Bed%20Skirts',
                'Bed%20Throws',
                'Cornice%20Boxes',
                'Draperies',
                'Duverlets',
                'Duvets',
                'Pillows',
                'Privacy%20Curtains',
                'Quilted%20Coverlet',
                'Roman%20Shades',
                'Shower%20Curtains',
                'Top%20Sheets',
                'Upholstery',
                'Valances');

                foreach( $applications as $application):
                ?>
                <li class="mb-2">
                    <input class="focus:ring-0 focus:shadow-none focus:ring-offset-0 w-[20px] h-[20px] text-[#F15D22] rounded border-gray-300 bg-gray-100 focus:outline-none" <?php if($_GET[$application] == 'on'): ?> checked <?php endif; ?>  type="checkbox" name="<?php echo $application; ?>" id="<?php echo $application; ?>">
                    <label for="<?php echo $application; ?>"  class="text-[#808080] font-weight-light text-[15px] ml-[7px]"> <?php echo preg_replace('/%20/', ' ', $application); ?></label>
                </li>
                <?php endforeach; ?>
            </ul>
            
            <div class="mt-3 ">
                <a id="application-see-more" class="cursor-pointer text-[14px]"><u> See More </u></a>
            </div>
    
        </div>
        <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
            <p class="filter-title text-dark"><strong>Materials</strong></p>
            <ul class="mt-3">
                <?php $materials = array('Acrylic',
                    'Chenille',
                    'Cotton',
                    'Faux%20Fur',
                    'Flannel',
                    'Hemp',
                    'Jacquard',
                    'Jersey',
                    'Linen',
                    'Metelasse',
                    'Microfriber',
                    'Percale',
                    'Polyester',
                    'Satin',
                    'Tencel',
                    'Velvet',
                    'Wool',
                );
                foreach($materials as $material):
                ?>
                <li class="mb-2">
                    <input class="focus:ring-0 focus:shadow-none focus:ring-offset-0 w-[20px] h-[20px] text-[#F15D22] rounded border-gray-300 bg-gray-100 focus:outline-none" type="checkbox" <?php if($_GET[$material] == 'on'): ?> checked <?php endif; ?> name="<?php echo $material; ?>" id="<?php echo $material; ?>">
                    <label for="<?php echo $material; ?>" class="text-[#808080] font-weight-light text-[15px] ml-[7px]"><?php echo preg_replace('/%20/', ' ', $material); ?></label>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
            <p class="filter-title text-dark"><strong>Maximum Width</strong></p>
            <ul class="mt-3">

                <?php $widths = ['54','72','94','110','114'] ?>
                <?php foreach($widths as $width): ?>
                    <li class="mb-2">
                        <input class="focus:ring-0 focus:shadow-none focus:ring-offset-0 w-[20px] h-[20px] text-[#F15D22] rounded border-gray-300 bg-gray-100 focus:outline-none" type="checkbox" <?php if($_GET[$width] == 'on'): ?> checked <?php endif; ?> name="<?php echo $width; ?>" id="<?php echo $width; ?>">
                        <label for="<?php echo $width; ?>" class=" <?php if($_GET[$width] == 'on'): ?> font-weight-bold text-[#262831] <?php else: ?> text-[#808080] font-weight-light   <?php endif; ?> text-[15px] ml-[7px]"><?php echo $width; ?>"</label>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
            <p class="filter-title text-dark"><strong>Patterns & Textures</strong></p>
            <ul class="mt-3">
                <?php $patterns = ['Patterned','Solids','Textured'] ?>
                <?php foreach($patterns as $pattern): ?>
                    <li class="mb-2">
                        <input class="focus:ring-0 focus:shadow-none focus:ring-offset-0 w-[20px] h-[20px] text-[#F15D22] rounded border-gray-300 bg-gray-100 focus:outline-none" type="checkbox" <?php if($_GET[$pattern] == 'on'): ?> checked <?php endif; ?> name="<?php echo $pattern; ?>" id="<?php echo $pattern; ?>">
                        <label for="<?php echo $pattern; ?>" class=" <?php if($_GET[$pattern] == 'on'): ?> font-weight-bold text-[#262831] <?php else: ?> text-[#808080] font-weight-light   <?php endif; ?> text-[15px] ml-[7px]"><?php echo $pattern; ?></label>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="box bg-white filter-item rounded-2xl p-3 p-lg-4 mb-4 shadow-sm">
            <p class="filter-title text-dark"><strong>Fabric Type</strong></p>
            <ul class="mt-3">
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
            <ul class="mt-3">
                <p class="openness_range_label d-flex justify-content-between">
                    <span>0%</span>
                    <span>5%</span>
                    <span>10%</span>
                </p>
                <input type="range" min="0" max="10" value="2" id="fader" step="1">
            </ul>
        </div>
    </form>
</div>

<script>
    jQuery(function() {

        for(let i=1;i<=8;i++)
        {
            jQuery(`.filter-application ul li:nth-last-child(${i})`).hide();
        }

        $('#application-see-more').on('click', function(){
            for(let i=1;i<=8;i++)
            {
                jQuery(`.filter-item ul li:nth-last-child(${i})`).show();
            }
        })
    })
</script>