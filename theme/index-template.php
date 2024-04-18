<?php
/*
Template Name: Home
*/

get_header(); 

$hero = get_field('hero_image');
$solution_image = get_field('solution_image');
$aeglobal_logo_black = get_field('aeglobal_logo_black');
$bg_obp = get_field('bg_obp');
$img1 = get_field('img_1');
$img2 = get_field('img_2');
$img_block_1 = get_field('img_block_1');
$img_block_2 = get_field('img_block_2');
$img_block_3 = get_field('img_block_3');
$company1 = get_field('keep_company_1');
$company2 = get_field('keep_company_2');

?>

<div class="flex  min-h-[70vh] overflow-hidden text-center pt-40 pb-14 bg-no-repeat bg-cover md:bg-fixed relative" style="background-image:url(<?=$hero?>); background-position: center 70%;">
    <span class="absolute z-0 inset-0 w-full h-full border-red-600 bg-gradient-to-b from-[#031728]"></span>
    <div class="flex flex-col justify-between relative z-10 grow mx-auto">
        <h1>This is a big <br> F**king <span class="inline-block font-futura font-bold bg-primary px-2 pt-2 pb-3 text-secondary text-4xl -rotate-6 translate-y-5 md:-translate-y-5">problem.</span></h1>
        <div class="mt-16 md:mt-0">
            <a href="" class="md:ml-8 btn-yellow uppercase">Join the movement</a>
        </div>
    </div>
</div>

<div class="bg-light ">
    <div class="container mx-auto text-center">
        <h2>We Have a Big<br/> F**king Solution.</h2>
        <div class="relative inline-block mt-4 mb-14">
            <span class="inline-block font-futura font-bold bg-primary px-2 pt-2 pb-3 text-secondary text-2xl md:text-4xl -rotate-6 -translate-y-5 absolute bottom-4 xl:bottom-1/4 -right-4 xl:-right-1/4">let's talk trash.</span>
            <img src="<?=$solution_image?>" alt="let's talk trash." loading="lazy" class="mx-auto" />
        </div>
        <h2 class="text-2xl md:text-4xl whitespace-nowrap">Welcome to <span class="inline-block font-futura font-bold bg-primary px-2 pt-1 pb-0 text-secondary text-2xl md:text-4xl -rotate-3 -translate-y-1 uppercase relative z-10">Talktrash</span></h2>
        <h2 class="text-2xl md:text-4xl -mt-4 whitespace-nowrap">Powered by <span class="inline-block font-futura font-bold bg-secondary px-4 pt-4 pb-4 rotate-3 translate-y-3 uppercase"><img src="<?=$aeglobal_logo_black?>" class=" w-[100px] md:w-[250px]" loading="lazy" /></span></h2>
    </div>
</div>

<div class="bg-foreground">
    <div class="container mx-auto text-center py-20">
        <h2 class="text-light">Ever Heard of OBP?</h2>
        <span class="text-3xl text-light font-superdisp">(Ocean Bound Plastic)</span>
        <p class="mt-8 text-2xl text-light font-superdisp">The short version is that <span class="inline-block font-futura font-bold bg-secondary px-2 pt-1 pb-1 text-dark text-2xl -rotate-6 md:-translate-y-1">it sucks.</span></p>
    </div>
</div>

<div class="bg-primary min-h-[70vh] bg-bottom flex items-center" style="background-image:url(<?=$bg_obp?>);">
    <div class=" container mx-auto">
        <div><h2 class="md:w-1/2">What Is <br>Ocean Bound <br>Plastic?</h2></div>
        <div class="flex justify-end mt-4 md:mt-0"><p class="md:w-1/3 font-bold font-inter">Ocean bound plastic is discarded materials within 50 kilometers of our seas, streams, rivers, and lakes that is likely to enter the ocean. OBP is a critical element in the fight against the plastic pollution crisis. About 80% of the oceans’ plastic contamination is from land so capturing OBP before it becomes ocean plastic is one of the most impactful solutions to this global crisis.</p></div>
    </div>
</div>

<div class="bg-foreground">
    <div class=" container mx-auto md:flex">
        <div class="md:w-1/2 text-light md:px-5">
            <h3 class="text-tertiary md:pl-4">We believe the plastic <br class="hidden lg:block">crisis can be solved now.</h3>
            <p class="pt-4 pb-6 md:pl-4 font-inter">Talk Trash isn't some TEDx-lite, kum-ba-yah session about saving the world. It's the realization that while plastic isn't a dirty word, it is a dirty business. It's also proof that one man's trash...well, you get it.</p>
            <img src="<?=$img1?>" alt="We believe the plastic crisis can be solved now" loading="lazy">
        </div>
        <div class="mt-4 md:mt-0 md:w-1/2 text-light md:px-5">
            <img src="<?=$img2?>" alt="From Trash to Treasure" loading="lazy">
            <h3 class="text-quaternary py-4 md:pl-4">From Trash to Treasure.</h3>
            <p class="md:pl-4 font-inter">AE Global has already launched the first of this program in the Dominican Republic. We are looking for partners to help us expand our reach. Talk Trash could be your sustainability impact story. Unapologetic, bold, and white labeled. We told you we have big ideas. Interested?</p>
        </div>
    </div>
</div>

<div class="bg-light border-b-4 border-quaternary">
    <div class=" container mx-auto">
        <h2 class="text-center">This Is How We <br/>Make the <span class="inline-block font-futura font-bold bg-primary px-2 pt-0 pb-1 md:pb-2 text-secondary text-2xl md:text-4xl -rotate-6 ">magic</span> Happen.</h2>
        <div class="grid md:grid-cols-3 gap-12 mt-8">

            <div class="img-numlist-block group">
                <span style="background-image:url(<?=$img_block_1?>);" class="group-hover:bg-[size:130%]"><strong>1.</strong></span>
                <h3>The plastic <br>is collected.</h3>
                <p>We pay fair wages to members of the community to collect plastic. By employing locals, employment numbers increase and stimulate the local economy.</p>
            </div>

            <div class="img-numlist-block group">
                <span style="background-image:url(<?=$img_block_2?>);" class="group-hover:bg-[size:130%]"><strong>2.</strong></span>
                <h3>The plastic gets<br> processed.</h3>
                <p>The collected plastic is separated and run through our recycling process to be in a raw state again, ready for new life.</p>
            </div>

            <div class="img-numlist-block group">
                <span style="background-image:url(<?=$img_block_3?>);" class="group-hover:bg-[size:130%]"><strong>3.</strong></span>
                <h3>Sustainable<br> packaging is born.</h3>
                <p>The renewed, processed plastic is moved into production, becoming various forms of sustainable packaging solutions.</p>
            </div>

        </div>
    </div>
</div>

<div>
    <div class=" container mx-auto">
        <h2 class="text-center">The Company We Keep.</h2>
        <p class="mt-8 text-xl md:text-2xl font-semibold text-center mx-auto max-w-[600px]">Fellow change-makers, innovators and experts we partner with to combat this crisis.</p>
        <div class="company-keep">
            <div>
                <a href="https://oceanrecoverygroup.com/" target="_blank"><img src="<?=$company1?>" alt="ORG"></a>
                <p>ORG’s recycling facility in the Dominican Republic safely and efficiently collects, cleans, sorts, bales, and ships ocean-bound plastic to be re-introduced into the packaging supply chain. ORG diverts ocean bound plastics to help companies achieve sustainability goals. In 2023, ORG expects to recover 24 million pounds of ocean bound plastic, equating to 528 million plastic bottles.</p>
            </div>
            <div>
                <a href="https://repurpose.global/contact-us?utm_term=repurpose%20global&utm_campaign=Brand+-+rePurpose+Global+(7RPM)&utm_source=adwords&utm_medium=ppc&hsa_acc=5374063798&hsa_cam=18463623813&hsa_grp=137064407970&hsa_ad=688217949832&hsa_src=g&hsa_tgt=kwd-873006529145&hsa_kw=repurpose%20global&hsa_mt=p&hsa_net=adwords&hsa_ver=3&gad_source=1&gclid=CjwKCAjwtqmwBhBVEiwAL-WAYeFYgcmE_MgF3k-uorRz2CUEC7huZGV42ow14IU02wt8IeXqzscPDhoCI98QAvD_BwE" target="_blank"><img src="<?=$company2?>" alt="rePurpose"></a>
                <p>rePurpose Global is the world’s leading Plastic Action Platform, pioneering solutions that enable organizations to take action on their plastic footprints and support waste entrepreneurs to recover plastic from nature. Through rePurpose Global’s Impact Projects, they are building waste management systems and infrastructure where they’re most needed to fight plastic pollution. rePurpose Global is not just recovering plastic waste, but has a range of solutions that support brands to take action on their plastic footprints, by driving collaboration at a global scale.</p>

                <p>Our plastic recovery efforts are also tracked, measured, verified and certified by our partner, rePurpose Global.</p>
            </div>
        </div>

        <h2 class="text-center">More Questions? <br/>We’ve Got <span class="inline-block font-futura font-bold bg-primary px-2 pt-0 pb-2 text-secondary text-2xl md:text-4xl -rotate-6 -translate-y-1">answers.</span></h2>

        <div class="mt-12">

            <ul class="faq">

            <?php
            if( have_rows('questions') ):

                $n = 0;

                while( have_rows('questions') ) : the_row();
                    $n++;
                    $q = get_sub_field('question');
                    $a = get_sub_field('answer');
                ?>
						
                <li x-data="{isOpen:<?=($n==1 ? 'true' : 'false')?>}">
        
                    <button type="button" @click="isOpen = !isOpen">
                        <div>
                            <strong><?=$q?></strong>
                            <span :class="{ 'ico-plus': !isOpen, 'ico-minus': isOpen }"></span>
                        </div>
                    </button>
        
                    <div class="bg-custom-gray relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container<?=$n?>" x-bind:style="isOpen ? 'max-height: ' + $refs.container<?=$n?>.scrollHeight + 'px' : ''">
                        <div class="p-6">
                            <?=$a?>
                        </div>
                    </div>
        
                </li>
                
                <?php

endwhile;

endif;
?>

            </ul>

        </div>

    </div>
</div>

<?php
get_footer();