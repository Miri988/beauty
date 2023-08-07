<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'title' => 'Dewy Glow Jelly Cream',
                'rating' => rand(0,5),
                'price' => 26.00,
                'description' => 'A gel moisturizer packed with glow-boosting Cherry Blossom Extracts, visibly brightening niacinamide, and hydrating betaine from sugar beets. Advanced with glycerin and Cherry Blossom flavanoids with visibly soothing and moisturizing benefits for skin that’s ready for makeup! Dermatologist tested.',
                'size' => '50 ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'A clear, water-jelly cream with Cherry Blossom and Niacinamide that delivers a burst of hydration and glow for visibly brighter, dewy skin.',
                'ingredients' => 'Cherry Blossom Flavonoids, Niacinamide, Sugar Beet Betaine',
                'use' => 'A clear, water-jelly cream with Cherry Blossom and Niacinamide that delivers a burst of hydration and glow for visibly brighter, dewy skin.',
                'category_id' => 1,
            ],
            [
                'title' => 'Two in One Poreless Power Liquid 100ml',
                'rating' => rand(0,5),
                'price' => 9.25,
                'description' => 'The Cosrx Two In One Poreless Power Liquid is dually able for pore care 
                with BHA to help clean the pores while it helps to tighten them.',
                'size' => '100 ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'Formulated with White Willow Bark Water and Natural BHA, 
                it helps to tighten pores while gently exfoliating the skin.',
                'ingredients' => 'Cherry Blossom Flavonoids, Niacinamide, Sugar Beet Betaine',
                'use' => 'Apply 1-2 pumps and apply to the entire face. Use a cotton pad and gently wipe the face for gentle exfoliating effect.',
                'category_id' => 1,
            ],
            [
                'title' => 'Hydrogel Eye Patch 84g / 87g 5 Types',
                'rating' => rand(0,5),
                'price' => 4.78,
                'description' => '* SalmonOil&Peptide
                1. Salmon oil is rich in palmytooleic acid, which has the effects of skin barrier restoration,
                anti-inflammation and burn treatment so it helps to improve skin damage.
                2. Salmon oil contains vitamin E, an antioxidant, that helps to keep your skin clear and shiny.
                
                * Gold&Snail
                1. The rich nutrients of snail mucilage extract give firm and moist skin to the skin around the eyes.
                2. The gold ingredient helps circulation and relieves the dullness of the eyes.
                
                * Black Pearl
                1. The black pearl extracts cleanses the skin well being very effective on whitening;
                it also removes dead skin and waste.
                2. Black pearl with high amino acid mineral contents and gold ingredients helps to create
                and manage more healthy beautiful skin.',
                'size' => '84g (1.4g * 60ea)',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'A clear, water-jelly cream with Cherry Blossom and Niacinamide that delivers a burst of hydration and glow for visibly brighter, dewy skin.',
                'ingredients' => 'Cherry Blossom Flavonoids, Niacinamide, Sugar Beet Betaine',
                'use' => '1. After cleansing, lightly prepare your skin with toner.
                2. Remove the patch using the built-in pliers.
                3. Attach the patch to the desired area, such as the eye area or the palm line.
                4. After about 20 to 40 minutes, remove the patch and lightly tap the remaining essence to absorb.',
                'category_id' => 1,
            ],
            [
                'title' => 'Acne Pimple Master Patch 1pcs * 24ea',
                'rating' => rand(0,5),
                'price' => 1.70,
                'description' => 'Acne Pimple Master Patch heals acne, blemishes and prevents future breakouts quickly.',
                'size' => '1pcs * 24ea',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'Hypo-allergenic dressing that sensitive skin type also can use
                Various Sizes included.',
                'ingredients' => 'Hydrocolloid patch prevent secondary infections and absorbs
                exudate to encourage wound repair process more faster.',
                'use' => 'Remove patch from film and apply it onto area of concern.
                Remove after 8-12 hours.',
                'category_id' => 1,
            ],
            [
                'title' => 'Berry Lip Night Mask 5g',
                'rating' => rand(0,5),
                'price' => 1.18,
                'description' => '1. It Melts the dead skin cells on your lips while you\'re sleeping. Refreshing feeling with a berry scent.',
                'size' => '5g * 1pcs',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'High-moisturizing, high-nourisiment contents remains on your lips overnight.',
                'ingredients' => ' Contains berry contents with a lenti of Vitamin C and sulfation contnet.',
                'use' => '1. Before sleep, apply enough amount to cover your lips with your finger or a q-tip.
                2. Wipe out with a tissue on the next morning.',
                'category_id' => 1,
            ],
            [
                'title' => 'Aronyx Hyaluronic Acid Aqua Cream 50ml',
                'rating' => rand(0,5),
                'price' => 3.60,
                'description' => 'A moisturizing cream formulated with 3000ppm of Hyaluronic Acid delivers deep hydration and 
                helps strengthen the moisture barrier of the skin.',
                'size' => '50ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'Features 3 types of Peptides with rich amino acids that helps enhance skin elasticity.',
                'ingredients' => 'Contains naturally-derived ingredients including Jeju Rapeseed Flower extract and 
                Jeju Prunus Yedoensis extract that moisturize and rejuvenate the skin.',
                'use' => 'Apply a moderate amount over the face and pat lightly for better absorption.',
                'category_id' => 1,
            ],
            [
                'title' => 'Intense Rich Active Cream 100ml',
                'rating' => rand(0,5),
                'price' => 5.36,
                'description' => 'It is a moisturizing nutritious cream with fermented Soybean ingredient
                which helps deeply moisturize, provides nutrition to the skin to make
                healthy and firm skin.',
                'size' => '100ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'It is a moisturizing nutritious cream with fermented Soybean ingredient
                which helps deeply moisturize, provides nutrition to the skin to make
                healthy and firm skin.',
                'ingredients' => 'It is a moisturizing nutritious cream with fermented Soybean ingredient
                which helps deeply moisturize, provides nutrition to the skin to make
                healthy and firm skin.',
                'use' => 'At the end of skin care, get right amount of the product and spread.',
                'category_id' => 1,
            ],
            [
                'title' => 'Advanced Snail 96 Mucin Power Essence 100ml',
                'rating' => rand(0,5),
                'price' => 8.18,
                'description' => 'This Advanced Snail Gel Lotion is protects skin from moisutre loss and keeps skin smooth,
                and healthy without the use of heavy oils.',
                'size' => '50ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'With Snail Secretion Filtrate, It promotes elasticity of skin and improves damaged skin.',
                'ingredients' => 'Free of paraben, ethanol, surfactant, artificial colorant, artificial fragrance, triethanolamine and phthalein.',
                'use' => 'Take an adequate amount of the product, gently apply to a face and neck area.',
                'category_id' => 1,
            ],
            [
                'title' => 'Multi Protection UV Sun Block 70ml',
                'rating' => rand(0,5),
                'price' => 3.13,
                'description' => 'This soft cream type sunblock could be spread softly on
                facewhich then protects skin from sun and its moisturizing
                componentprovides water to the face keeping it moist.',
                'size' => '70ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'This SPF50+ PA+++ sunblock contains aloe extract which
                relieves skin irritation,protecting it from skin
                troubles while making the face healthy.',
                'ingredients' => 'This soft cream type sunblock could be spread softly on
                facewhich then protects skin from sun and its moisturizing
                componentprovides water to the face keeping it moist.',
                'use' => 'After your basic care routine, take a moderate amount with
                your finger and apply it on the parts of body that are exposed to UV rays.
                Start from the center and spread it towards outer corners of your face.',
                'category_id' => 1,
            ],
            [
                'title' => 'Relief Rice+Probiotics Sun Cream 50ml',
                'rating' => rand(0,5),
                'price' => 11.11,
                'description' => 'Even if you apply a large amount several times, it is not sticky
                and gives a moist finish like that of a light moisturizing cream.',
                'size' => '50ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'Even if you apply a large amount several times, it is not sticky
                and gives a moist finish like that of a light moisturizing cream.',
                'ingredients' => 'Containing 30% rice extract and grain fermented extracts,
                it provides moisture and nourishment to the skin.',
                'use' => 'At the last step of skin care routine, evenly spread a generous amount over areas vulnerable to sun exposure.',
                'category_id' => 1,
            ],
            [
                'title' => 'Whitening UV Sun Block 70ml',
                'rating' => rand(0,5),
                'price' => 2.61,
                'description' => 'Jigott Whitening UV Sun Block protects skin from intense UV rays in everyday life, leisure, sports and other long hour outdoor activities for a clearer and healthier skin.',
                'size' => '70ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'Keep the skin moist and moist, prevent dry and cover the smallpox.',
                'ingredients' => 'Contains whitening ingredients, SPF 50+ can prevent UV damage, can provide moisture and nutrition.',
                'use' => 'Use toner, lotion, essence, apply the sunscreen evenly.',
                'category_id' => 1,
            ],
            [
                'title' => 'The Retinol 0.5 Oil 20ml',
                'rating' => rand(0,5),
                'price' => 12.17,
                'description' => 'Many retinol products use a relatively easy-to-develop retinol derivative
                (retinyl palmitate) instead of pure retinol, which is sensitive to light and heat.',
                'size' => '20ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'It blocks aging concerns by prescribing highly concentrated ingredients that help
                with special elasticity care along with pure retinol.',
                'ingredients' => 'It contains super vitamin E, which is up to 50 times more effective than tocopherol, and
                contains 91% vegetable squalane, which is a moisturizing factor that is skin-friendly and moisturizing.',
                'use' => 'Please be careful as you may feel irritation when using around the eyes and mouth with sensitive skin.
                1. Apply after washing the face in the evening and during the serum stage.
                2. Please follow the adaptation guide.
                
                *Use it every other day in the evening as an adaptation period for the 1st and 2nd week,
                and apply an amount equal to the size of a grain of rice onto the desired area.
                *From the 3rd week onwards, it is the stabilization period, so apply an appropriate
                amount to the entire face in a pea-sized amount when using it every evening.
                3. Use immediately after purchase and keep refrigerated.
                As retinol acts on the skin, it may cause irritation (redness, peeling, and burning).
                This phenomenon indicates that the product is working normally, and if irritation persists,
                reduce the frequency or discontinue use.
                
                *Due to the characteristics of the aluminum tube, when it is first opened,
                the contents may discharge excessively, so please use it with caution.',
                'category_id' => 1,
            ],
            [
                'title' => '30 Days Miracle Tea Tree Clear Spot Oil 10ml',
                'rating' => rand(0,5),
                'price' => 5.98,
                'description' => 'Very effective to concentrate troublesome skin even with a small amount.',
                'size' => '10ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'Controls excessive sebum around the problem area while the cool tea tree scent adds a refreshing effect to tired skin.',
                'ingredients' => 'Contains 150,000ppm tea tree oil from Australia and contains 19.88% tea tree leaf extract from Korea.',
                'use' => 'Apply 1 – 2 drops on problem spot using a cotton swab.',
                'category_id' => 1,
            ],
            [
                'title' => 'RE:BLUE Night Facial Oil 15ml ',
                'rating' => rand(0,5),
                'price' => 25.04,
                'description' => 'Energy balancing night oil that balances the disordered skin rhythm.',
                'size' => '15ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'Features 3 types of Peptides with rich amino acids that helps enhance skin elasticity.',
                'ingredients' => 'Contains naturally-derived ingredients including Jeju Rapeseed Flower extract and 
                Jeju Prunus Yedoensis extract that moisturize and rejuvenate the skin.',
                'use' => 'In the next step of skin care toner, apply 1-2 drops to the palm of your hand
                and press the entire face with your palm for absorption.',
                'category_id' => 1,
            ],
            [
                'title' => 'Plainet Squalane Oil 100 30ml',
                'rating' => rand(0,5),
                'price' => 8.40,
                'description' => 'Derived 100% from sugarcane, a lightweight, multi-purpose squalane oil rapidly penetrates the skin
                to instantly hydrate and lock in moisture. ',
                'size' => '30ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'This replenishing facial oil works to boost elasticity,
                nourish, soothe, and smooth out dehydration lines. ',
                'ingredients' => 'PLAINET SQUALANE OIL helps promote cell turnover
                and lessens the appearance of fine lines. This plant-based vegan oil improves skin health by soothing redness and skin irritation.',
                'use' => 'At the last step of skincare routine, dispense a moderate amount and massage to the entire face. Gently pat for better absorption.',
                'category_id' => 1,
            ],
            [
                'title' => 'Calamansi Vita Peeling Gel 120ml',
                'rating' => rand(0,5),
                'price' => 2.09,
                'description' => ' Gives vitality to dull and lifeless skin, Creates skin that you can be proud of.',
                'size' => '120ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => '7 patented Anti-inflammatory and immune response modulating capable extracts (Green tea, cinnabar, licorice, chamomile, vinegar, rosemary, and golden) People with sensitive skin can feel free to use on their skin.',
                'ingredients' => 'Abundent in 3 types of Vitamins! Ceruleanthus cherry flower extract, Alba waterlily flower extract, Matricaria extract, Waxy extract. It moisturizes dry skin and maintains moisture balance. ',
                'use' => '1. On a dry skin apply every where except around eyes and lips. 2. Rub according to the skin texture like you are lightly massaging. (Please take extra care on the areas with more dead skin cells.) 3. When waste is peeled, rinse with warm water so that the skin waste is not left on the face. Tip. 1-2 times a week are enough but depending on skin condition you can adjust the usage times. After removing the dead skin cell it will supply enough moisture and will help create moist clean skin.',
                'category_id' => 1,
            ],
            [
                'title' => 'Baking Powder Crunch Pore Scrub 200g',
                'rating' => rand(0,5),
                'price' => 4.88,
                'description' => 'The 2-in-1 deep & cooling pore scrub removes impurities from pores with its ingredient of
                40% baking powder granules and instantly tightens pores with the cooling effect of menthol derivative.',
                'size' => '200g',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'Features 3 types of Peptides with rich amino acids that helps enhance skin elasticity.',
                'ingredients' => 'Contains naturally-derived ingredients including Jeju Rapeseed Flower extract and 
                Jeju Prunus Yedoensis extract that moisturize and rejuvenate the skin.',
                'use' => '1. Tear along dotted line to extract scrub cleanser from pouch (one pouch per application).
                2. Apply cleanser to wet face, lather and massage then rinse off with warm water.
                3. Use 1-2 times per week.',
                'category_id' => 1,
            ],
            [
                'title' => 'Eggplant Baking Powder Pore Scrub 100g',
                'rating' => rand(0,5),
                'price' => 3.00,
                'description' => 'Along with the baking powder, it provides skin care for
                smooth skin by exfoliating the skin, also cleanses sebum
                and wastes in the pores',
                'size' => '100g',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'It contains eggplant fruit extract that fully moisturizes the skin
                and helps to control sebum secretion.',
                'ingredients' => 'Contains naturally-derived ingredients including Jeju Rapeseed Flower extract and 
                Jeju Prunus Yedoensis extract that moisturize and rejuvenate the skin.',
                'use' => 'Apply cleanser on wet face, gently massage on face
                except an eye-area and mouth-area, then wash off with warm water.
                (Recommended to use twice a week)',
                'category_id' => 1,
            ],
            [
                'title' => 'Real Clean Peeling Gel 120g',
                'rating' => rand(0,5),
                'price' => 4.02,
                'description' => 'Gommage typed peeling gel which absorbs dead skins to remove.
                It effects on skin texture improving, protecting skin and clearing pores.',
                'size' => '120g',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'Features 3 types of Peptides with rich amino acids that helps enhance skin elasticity.',
                'ingredients' => 'Contains naturally-derived ingredients including Jeju Rapeseed Flower extract and 
                Jeju Prunus Yedoensis extract that moisturize and rejuvenate the skin.',
                'use' => '1. Apply enough amount to dry skin avoiding eyes and mouth zone and massage softly as like drawing circles.
                2. When dead skin cells come out, massage 1-2 minutes more and wash clean with lukewarm water.',
                'category_id' => 1,
            ],
            [
                'title' => 'Apricot Blossom Peeling Gel 100ml',
                'rating' => rand(0,5),
                'price' => 8.02,
                'description' => 'It helps to improve skin troubles caused by rough skin texture and excess sebum.
                The gommage texture minimizes skin irritation.
                As the plant-derived cellulose is worked onto the skin,
                it gently exfoliates dead skin cells and skin wastes.',
                'size' => '100ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'It can be used on the both face and body.
                Moisturization Containing 19% prunus mume water and 8% plant-derived cellulose,
                it helps make the skin texture soft and moist.',
                'ingredients' => 'This is a gommage type exfoliant containing
                19% Prunus Mume Flower Water and 8% plant-derived Cellulose.',
                'use' => 'Apply a proper amount on your dry face except areas near eyes.
                Massage gently for about 20 seconds.',
                'category_id' => 1,
            ],
        ]);
            
    }
}
