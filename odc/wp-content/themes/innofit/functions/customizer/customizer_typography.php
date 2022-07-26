<?php
add_action( 'customize_register', 'innofit_typography_settings_customizer' );
function innofit_typography_settings_customizer( $wp_customize ){

$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

$wp_customize->add_panel( 'innofit_typography_setting', array(
		'priority'       => 990,
		'capability'     => 'edit_theme_options',
		'title'      => esc_html__('Typography Settings','innofit'),
	) );



// Enble / Disable typography section
$wp_customize->add_section( 'innofit_typography_section' , array(
		'title'      => esc_html__('Custom Typography', 'innofit'),
		'panel' => 'innofit_typography_setting',
		'priority'       => 0,
   	) );

$wp_customize->add_setting(
    'enable_custom_typography',
    array(
        'default'           =>  false,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'innofit_sanitize_checkbox',
    ) );

$wp_customize->add_control('enable_custom_typography', array(
		'label' => esc_html__('Enable Custom Typography','innofit'),
        'section' => 'innofit_typography_section',
		'setting' => 'enable_custom_typography',
		'type'    =>  'checkbox'
    ));

$font_size = array();
for($i=9; $i<=100; $i++)
{
	$font_size[$i] = $i;
}

$line_height = array();
for($i=1; $i<=100; $i++)
{
    $line_height[$i] = $i;
}

$btn_padd = array();
for($i=1; $i<=50; $i++)
{
    $btn_padd[$i] = $i;
}

$text_transform = array('default' => 'Default', 'capitalize' => 'Capitalize', 'lowercase' => 'Lowercase', 'Uppercase' => 'Uppercase');

    $font_weight = array('100' => '100', '200' => '200', '300' => '300', '400' => '400', '500' => '500', '600' => '600', '700' => '700', '800' => '800', '900' => '900');
$font_family = array('ABeeZee' => 'ABeeZee', 'Abel' => 'Abel', 'Abril Fatface' => 'Abril Fatface', 'Aclonica' => 'Aclonica', 'Acme'=> 'Acme', 'Actor'=>'Actor', 'Adamina' => 'Adamina', 'Advent Pro' => 'Advent Pro', 'Aguafina Script' => 'Aguafina Script', 'Akronim' => 'Akronim', 'Aladin'=> 'Aladin', 'Aldrich'=>'Aldrich', 'Alef' => 'Alef', 'Alegreya' => 'Alegreya', 'Alegreya SC' => 'Alegreya SC', 'Alegreya Sans' => 'Alegreya Sans', 'Alegreya Sans SC'=>'Alegreya Sans SC', 'Alex Brush' => 'Alex Brush', 'Alfa Slab One' => 'Alfa Slab One', 'Alice' => 'Alice', 'Alike' => 'Alike', 'Alike Angular' => 'Alike Angular', 'Allan' => 'Allan', 'Allerta' => 'Allerta', 'Allerta Stencil' => 'Allerta Stencil', 'Allura' => 'Allura', 'Almendra' => 'Almendra', 'Almendra Display' => 'Almendra Display', 'Almendra SC' => 'Almendra SC', 'Amarante' => 'Amarante', 'Amaranth' => 'Amaranth', 'Amatic SC' => 'Amatic SC', 'Amatica SC' => 'Amatica SC', 'Amethysta' => 'Amethysta', 'Amiko' => 'Amiko', 'Amiri' => 'Amiri', 'Amita' => 'Amita', 'Anaheim' => 'Anaheim', 'Andada' => 'Andada', 'Andika' =>  'Andika', 'Angkor' => 'Angkor', 'Annie Use Your Telescope' => 'Annie Use Your Telescope', 'Anonymous Pro' => 'Anonymous Pro', 'Antic' => 'Antic', 'Antic Didone' => 'Antic Didone', 'Antic Slab' => 'Antic Slab', 'Anton' => 'Anton', 'Arapey' => 'Arapey', 'Arbutus' => 'Arbutus', 'Arbutus Slab' => 'Arbutus Slab', 'Architects Daughter' => 'Architects Daughter', 'Archivo Black' => 'Archivo Black', 'Archivo Narrow' => 'Archivo Narrow', 'Aref Ruqaa' => 'Aref Ruqaa', 'Arima Madurai' => 'Arima Madurai', 'Arimo' => 'Arimo', 'Arizonia' => 'Arizonia', 'Armata' => 'Armata', 'Artifika' => 'Artifika', 'Arvo'=>'Arvo', 'Arya'=>'Arya', 'Asap'=>'Asap', 'Asar'=>'Asar', 'Asset'=>'Asset', 'Assistant'=>'Assistant', 'Astloch'=>'Astloch', 'Asul'=>'Asul', 'Athiti'=>'Athiti', 'Atma'=>'Atma', 'Atomic Age'=>'Atomic Age', 'Aubrey'=>'Aubrey', 'Audiowide'=>'Audiowide', 'Autour One'=>'Autour One', 'Average'=>'Average', 'Average Sans'=>'Average Sans', 'Averia Gruesa Libre'=>'Averia Gruesa Libre', 'Averia Libre'=>'Averia Libre', 'Averia Sans Libre'=> 'Averia Sans Libre', 'Averia Serif Libre'=>'Averia Serif Libre', 'Bad Script'=>'Bad Script', 'Baloo'=>'Baloo', 'Baloo Bhai'=>'Baloo Bhai', 'Baloo Da'=>'Baloo Da', 'Baloo Thambi'=>'Baloo Thambi', 'Balthazar'=>'Balthazar', 'Bangers'=>'Bangers', 'Basic'=>'Basic', 'Battambang'=>'Battambang', 'Baumans'=>'Baumans', 'Bayon'=>'Bayon', 'Belgrano'=>'Belgrano', 'Belleza'=>'Belleza', 'BenchNine'=>'BenchNine', 'Bentham'=>'Bentham', 'Berkshire Swash'=>'Berkshire Swash', 'Bevan'=>'Bevan', 'Bigelow Rules'=>'Bigelow Rules', 'Bigshot One'=>'Bigshot One', 'Bilbo'=>'Bilbo', 'Bilbo Swash Caps'=>'Bilbo Swash Caps', 'BioRhyme'=>'BioRhyme', 'BioRhyme Expanded'=>'BioRhyme Expanded', 'Biryani'=>'Biryani', 'Bitter'=>'Bitter', 'Black Ops One'=>'Black Ops One', 'Bokor'=>'Bokor', 'Bonbon'=>'Bonbon', 'Boogaloo'=>'Boogaloo', 'Bowlby One'=>'Bowlby One', 'Bowlby One SC'=>'Bowlby One SC', 'Brawler'=>'Brawler', 'Bree Serif'=>'Bree Serif', 'Bubblegum Sans'=>'Bubblegum Sans', 'Bubbler One'=>'Bubbler One', 'Buda'=>'Buda', 'Buenard'=>'Buenard', 'Bungee'=>'Bungee', 'Bungee Hairline'=>'Bungee Hairline', 'Bungee Inline'=>'Bungee Inline', 'Bungee Outline'=>'Bungee Outline', 'Bungee Shade'=>'Bungee Shade', 'Butcherman'=>'Butcherman', 'Butterfly Kids'=>'Butterfly Kids', 'Cabin'=>'Cabin', 'Cabin Condensed'=>'Cabin Condensed', 'Cabin Sketch'=>'Cabin Sketch', 'Caesar Dressing'=>'Caesar Dressing', 'Cagliostro'=>'Cagliostro', 'Cairo'=>'Cairo', 'Calligraffitti'=>'Calligraffitti', 'Cambay'=>'Cambay', 'Cambo'=>'Cambo', 'Candal'=>'Candal', 'Cantarell'=>'Cantarell', 'Cantata One'=>'Cantata One', 'Cantora One'=>'Cantora One', 'Capriola'=>'Capriola', 'Cardo'=>'Cardo', 'Carme'=>'Carme', 'Carrois Gothic'=>'Carrois Gothic', 'Carrois Gothic SC'=>'Carrois Gothic SC', 'Carter One'=>'Carter One', 'Catamaran'=>'Catamaran', 'Caudex'=>'Caudex', 'Caveat'=>'Caveat', 'Caveat Brush'=>'Caveat Brush', 'Cedarville Cursive'=>'Cedarville Cursive', 'Ceviche One'=>'Ceviche One', 'Changa'=>'Changa', 'Changa One'=>'Changa One', 'Chango'=>'Chango', 'Chathura'=>'Chathura', 'Chau Philomene One'=>'Chau Philomene One', 'Chela One'=>'Chela One', 'Chelsea Market'=>'Chelsea Market', 'Chenla'=>'Chenla', 'Cherry Cream Soda'=>'Cherry Cream Soda', 'Cherry Swash'=>'Cherry Swash', 'Chewy'=>'Chewy', 'Chicle'=>'Chicle', 'Chivo'=>'Chivo', 'Chonburi'=>'Chonburi', 'Cinzel'=>'Cinzel', 'Cinzel Decorative'=>'Cinzel Decorative', 'Clicker Script'=>'Clicker Script', 'Coda'=>'Coda', 'Coda Caption'=>'Coda Caption', 'Codystar'=>'Codystar', 'Coiny'=>'Coiny', 'Combo'=>'Combo', 'Comfortaa'=>'Comfortaa', 'Coming Soon'=>'Coming Soon', 'Concert One'=>'Concert One', 'Condiment'=>'Condiment', 'Content'=>'Content', 'Contrail One'=>'Contrail One', 'Convergence'=>'Convergence', 'Cookie'=>'Cookie', 'Copse'=>'Copse', 'Corben'=>'Corben', 'Cormorant'=>'Cormorant', 'Cormorant Garamond'=>'Cormorant Garamond', 'Cormorant Infant'=>'Cormorant Infant', 'Cormorant SC'=>'Cormorant SC', 'Cormorant Unicase'=>'Cormorant Unicase', 'Cormorant Upright'=>'Cormorant Upright', 'Courgette'=>'Courgette', 'Cousine'=>'Cousine', 'Coustard'=>'Coustard', 'Covered By Your Grace'=>'Covered By Your Grace', 'Crafty Girls'=>'Crafty Girls', 'Creepster'=>'Creepster', 'Crete Round'=>'Crete Round', 'Crimson Text'=>'Crimson Text', 'Croissant One'=>'Croissant One', 'Crushed'=>'Crushed', 'Cuprum'=>'Cuprum', 'Cutive'=>'Cutive', 'Cutive Mono'=>'Cutive Mono', 'Damion'=>'Damion', 'Dancing Script'=>'Dancing Script', 'Dangrek'=>'Dangrek', 'David Libre'=>'David Libre', 'Dawning of a New Day'=>'Dawning of a New Day', 'Days One'=>'Days One', 'Dekko'=>'Dekko', 'Delius'=>'Delius', 'Delius Swash Caps'=>'Delius Swash Caps', 'Delius Unicase'=>'Delius Unicase', 'Della Respira'=>'Della Respira', 'Denk One'=>'Denk One', 'Devonshire'=>'Devonshire', 'Dhurjati'=>'Dhurjati', 'Didact Gothic'=>'Didact Gothic', 'Diplomata'=>'Diplomata', 'Diplomata SC'=>'Diplomata SC', 'Domine'=>'Domine', 'Donegal One'=>'Donegal One', 'Doppio One'=>'Doppio One', 'Dorsa'=>'Dorsa', 'Dosis'=>'Dosis', 'Dr Sugiyama'=>'Dr Sugiyama', 'Droid Sans'=>'Droid Sans', 'Droid Sans Mono'=>'Droid Sans Mono', 'Droid Serif'=>'Droid Serif', 'Duru Sans'=>'Duru Sans', 'Dynalight'=>'Dynalight', 'EB Garamond'=>'EB Garamond', 'Eagle Lake'=>'Eagle Lake', 'Eater'=>'Eater', 'Economica'=>'Economica', 'Eczar'=>'Eczar', 'Ek Mukta'=>'Ek Mukta', 'El Messiri'=>'El Messiri', 'Electrolize'=>'Electrolize', 'Elsie'=>'Elsie', 'Elsie Swash Caps'=>'Elsie Swash Caps', 'Emblema One'=>'Emblema One', 'Emilys Candy'=>'Emilys Candy', 'Engagement'=>'Engagement', 'Englebert'=>'Englebert', 'Enriqueta'=>'Enriqueta', 'Erica One'=>'Erica One', 'Esteban'=>'Esteban', 'Euphoria Script'=>'Euphoria Script', 'Ewert'=>'Ewert', 'Exo'=>'Exo', 'Exo 2'=>'Exo 2', 'Expletus Sans'=>'Expletus Sans', 'Fanwood Text'=>'Fanwood Text', 'Farsan'=>'Farsan', 'Fascinate'=>'Fascinate', 'Fascinate Inline'=>'Fascinate Inline', 'Faster One'=>'Faster One', 'Fasthand'=>'Fasthand', 'Fauna One'=>'Fauna One', 'Federant'=>'Federant', 'Federo'=>'Federo', 'Felipa'=>'Felipa', 'Fenix'=>'Fenix', 'Finger Paint'=>'Finger Paint', 'Fira Mono'=>'Fira Mono', 'Fira Sans'=>'Fira Sans', 'Fjalla One'=>'Fjalla One', 'Fjord One'=>'Fjord One', 'Flamenco'=>'Flamenco', 'Flavors'=>'Flavors', 'Fondamento'=>'Fondamento', 'Fontdiner Swanky'=>'Fontdiner Swanky', 'Forum'=>'Forum', 'Francois One'=>'Francois One', 'Frank Ruhl Libre'=>'Frank Ruhl Libre', 'Freckle Face'=>'Freckle Face', 'Fredericka the Great'=>'Fredericka the Great', 'Fredoka One'=>'Fredoka One', 'Freehand'=>'Freehand', 'Fresca'=>'Fresca', 'Frijole'=>'Frijole', 'Fruktur'=>'Fruktur', 'Fugaz One'=>'Fugaz One', 'GFS Didot'=>'GFS Didot', 'GFS Neohellenic'=>'GFS Neohellenic', 'Gabriela'=>'Gabriela', 'Gafata'=>'Gafata', 'Galada'=>'Galada', 'Galdeano'=>'Galdeano', 'Galindo'=>'Galindo', 'Gentium Basic'=>'Gentium Basic', 'Gentium Book Basic'=>'Gentium Book Basic','Geo' =>'Geo', 'Geostar'=>'Geostar', 'Geostar Fill'=>'Geostar Fill', 'Germania One'=>'Germania One','Gidugu' =>'Gidugu', 'Gilda Display'=>'Gilda Display', 'Give You Glory'=>'Give You Glory', 'Glass Antiqua'=>'Glass Antiqua', 'Glegoo'=>'Glegoo', 'Gloria Hallelujah'=>'Gloria Hallelujah', 'Goblin One'=>'Goblin One', 'Gochi Hand'=>'Gochi Hand', 'Gorditas'=>'Gorditas', 'Goudy Bookletter 1911'=>'Goudy Bookletter 1911', 'Graduate'=>'Graduate', 'Grand Hotel'=>'Grand Hotel', 'Gravitas One'=>'Gravitas One', 'Great Vibes'=>'Great Vibes', 'Griffy'=>'Griffy', 'Gruppo'=>'Gruppo', 'Gudea'=>'Gudea', 'Gurajada'=>'Gurajada', 'Habibi' => 'Habibi', 'Halant' => 'Halant', 'Hammersmith One' => 'Hammersmith One', 'Hanalei' => 'Hanalei', 'Hanalei Fill' =>  'Hanalei Fill', 'Handlee' => 'Handlee', 'Hanuman' => 'Hanuman', 'Happy Monkey' => 'Happy Monkey', 'Harmattan' => 'Harmattan', 'Headland One' => 'Headland One', 'Heebo' => 'Heebo', 'Henny Penny' => 'Henny Penny', 'Herr Von Muellerhoff' => 'Herr Von Muellerhoff', 'Hind' => 'Hind', 'Hind Guntur' => 'Hind Guntur', 'Hind Madurai' => 'Hind Madurai', 'Hind Siliguri' => 'Hind Siliguri', 'Hind Vadodara' => 'Hind Vadodara', 'Holtwood One SC' => 'Holtwood One SC', 'Homemade Apple' => 'Homemade Apple', 'Homenaje' => 'Homenaje', 'IM Fell DW Pica' => 'IM Fell DW Pica', 'IM Fell DW Pica SC' => 'IM Fell DW Pica SC', 'IM Fell Double Pica' => 'IM Fell Double Pica', 'IM Fell Double Pica SC' => 'IM Fell Double Pica SC', 'IM Fell English' => 'IM Fell English', 'IM Fell English SC' => 'IM Fell English SC', 'IM Fell French Canon' => 'IM Fell French Canon', 'IM Fell French Canon SC' => 'IM Fell French Canon SC', 'IM Fell Great Primer' => 'IM Fell Great Primer', 'IM Fell Great Primer SC' => 'IM Fell Great Primer SC', 'Iceberg' => 'Iceberg', 'Iceland' => 'Iceland', 'Imprima' => 'Imprima', 'Inconsolata' => 'Inconsolata', 'Inder' => 'Inder', 'Indie Flower' => 'Indie Flower', 'Inika' => 'Inika', 'Inknut Antiqua' => 'Inknut Antiqua', 'Irish Grover' => 'Irish Grover', 'Istok Web' => 'Istok Web', 'Italiana' => 'Italiana', 'Italianno' => 'Italianno', 'Itim' => 'Itim', 'Jacques Francois' => 'Jacques Francois', 'Jacques Francois Shadow' => 'Jacques Francois Shadow', 'Jaldi' => 'Jaldi', 'Jim Nightshade' => 'Jim Nightshade', 'Jockey One' => 'Jockey One', 'Jolly Lodger' => 'Jolly Lodger', 'Jomhuria' => 'Jomhuria', 'Josefin Sans' => 'Josefin Sans', 'Josefin Slab' => 'Josefin Slab', 'Joti One' => 'Joti One', 'Judson' => 'Judson', 'Julee' => 'Julee', 'Julius Sans One' => 'Julius Sans One', 'Junge' => 'Junge', 'Jura' => 'Jura', 'Just Another Hand' => 'Just Another Hand', 'Just Me Again Down Here' => 'Just Me Again Down Here', 'Kadwa' => 'Kadwa', 'Kalam' => 'Kalam', 'Kameron' => 'Kameron', 'Kanit' => 'Kanit', 'Kantumruy' => 'Kantumruy', 'Karla' => 'Karla', 'Karma' => 'Karma', 'Katibeh' => 'Katibeh', 'Kaushan Script' => 'Kaushan Script', 'Kavivanar' => 'Kavivanar', 'Kavoon' => 'Kavoon', 'Kdam Thmor' => 'Kdam Thmor', 'Keania One' => 'Keania One', 'Kelly Slab' => 'Kelly Slab', 'Kenia' => 'Kenia', 'Khand' => 'Khand', 'Khmer' => 'Khmer', 'Khula' => 'Khula', 'Kite One' => 'Kite One', 'Knewave' => 'Knewave', 'Kotta One' => 'Kotta One', 'Koulen' => 'Koulen', 'Kranky' => 'Kranky', 'Kreon' => 'Kreon', 'Kristi' => 'Kristi', 'Krona One' => 'Krona One', 'Kumar One' => 'Kumar One', 'Kumar One Outline' => 'Kumar One Outline', 'Kurale' => 'Kurale', 'La Belle Aurore' => 'La Belle Aurore', 'Laila' => 'Laila', 'Lakki Reddy' => 'Lakki Reddy', 'Lalezar' => 'Lalezar', 'Lancelot' => 'Lancelot', 'Lateef' => 'Lateef', 'Lato' => 'Lato', 'League Script' => 'League Script', 'Leckerli One' => 'Leckerli One', 'Ledger' =>'Ledger', 'Lekton' => 'Lekton', 'Lemon' => 'Lemon', 'Lemonada' => 'Lemonada', 'Libre Baskerville' => 'Libre Baskerville', 'Libre Franklin' => 'Libre Franklin', 'Life Savers' => 'Life Savers', 'Lilita One' => 'Lilita One', 'Lily Script One' => 'Lily Script One', 'Limelight' => 'Limelight', 'Linden Hill' => 'Linden Hill', 'Lobster' => 'Lobster', 'Lobster Two' => 'Lobster Two', 'Londrina Outline' => 'Londrina Outline', 'Londrina Shadow' => 'Londrina Shadow', 'Londrina Sketch' => 'Londrina Sketch', 'Londrina Solid' => 'Londrina Solid', 'Lora' => 'Lora', 'Love Ya Like A Sister' => 'Love Ya Like A Sister', 'Loved by the King' => 'Loved by the King', 'Lovers Quarrel' => 'Lovers Quarrel', 'Luckiest Guy' => 'Luckiest Guy', 'Lusitana' => 'Lusitana', 'Lustria' => 'Lustria', 'Macondo' => 'Macondo', 'Macondo Swash Caps' => 'Macondo Swash Caps', 'Mada' => 'Mada', 'Magra' => 'Magra', 'Maiden Orange' => 'Maiden Orange', 'Maitree' => 'Maitree', 'Mako' => 'Mako', 'Mallanna' => 'Mallanna', 'Mandali' => 'Mandali', 'Marcellus' => 'Marcellus', 'Marcellus SC' => 'Marcellus SC', 'Marck Script' => 'Marck Script', 'Margarine' => 'Margarine', 'Marko One' => 'Marko One', 'Marmelad' => 'Marmelad', 'Martel' => 'Martel', 'Martel Sans' => 'Martel Sans', 'Marvel' => 'Marvel', 'Mate' => 'Mate', 'Mate SC' => 'Mate SC', 'Maven Pro' => 'Maven Pro', 'McLaren' => 'McLaren', 'Meddon' => 'Meddon', 'MedievalSharp' => 'MedievalSharp', 'Medula One' => 'Medula One', 'Meera Inimai' => 'Meera Inimai', 'Megrim' => 'Megrim', 'Meie Script' => 'Meie Script', 'Merienda' => 'Merienda', 'Merienda One' => 'Merienda One', 'Merriweather' => 'Merriweather', 'Merriweather Sans' => 'Merriweather Sans', 'Metal' => 'Metal', 'Metal Mania' => 'Metal Mania', 'Metamorphous', 'Metrophobic' => 'Metrophobic', 'Michroma' => 'Michroma', 'Milonga' => 'Milonga', 'Miltonian' => 'Miltonian', 'Miltonian Tattoo' => 'Miltonian Tattoo', 'Miniver' => 'Miniver', 'Miriam Libre' => 'Miriam Libre', 'Mirza' => 'Mirza', 'Miss Fajardose' => 'Miss Fajardose', 'Mitr' => 'Mitr', 'Modak' => 'Modak', 'Modern Antiqua' => 'Modern Antiqua', 'Mogra' => 'Mogra', 'Molengo' => 'Molengo', 'Molle' => 'Molle', 'Monda' => 'Monda', 'Monofett' => 'Monofett', 'Monoton' => 'Monoton', 'Monsieur La Doulaise' => 'Monsieur La Doulaise', 'Montaga' => 'Montaga', 'Montez' => 'Montez', 'Montserrat' => 'Montserrat', 'Montserrat Alternates' => 'Montserrat Alternates', 'Montserrat Subrayada' => 'Montserrat Subrayada', 'Moul' => 'Moul', 'Moulpali' => 'Moulpali', 'Mountains of Christmas' => 'Mountains of Christmas', 'Mouse Memoirs' => 'Mouse Memoirs', 'Mr Bedfort' => 'Mr Bedfort', 'Mr Dafoe' => 'Mr Dafoe', 'Mr De Haviland' => 'Mr De Haviland', 'Mrs Saint Delafield' => 'Mrs Saint Delafield', 'Mrs Sheppards' => 'Mrs Sheppards', 'Mukta Vaani' => 'Mukta Vaani', 'Muli' => 'Muli', 'Mystery Quest' => 'Mystery Quest', 'NTR' => 'NTR', 'Neucha' => 'Neucha', 'Neuton' => 'Neuton', 'New Rocker' => 'New Rocker', 'News Cycle' => 'News Cycle', 'Niconne' => 'Niconne', 'Nixie One' => 'Nixie One', 'Nobile' => 'Nobile', 'Nokora' => 'Nokora', 'Norican' => 'Norican', 'Nosifer' => 'Nosifer', 'Nothing You Could Do' => 'Nothing You Could Do', 'Noticia Text' => 'Noticia Text', 'Noto Sans' => 'Noto Sans', 'Noto Serif' => 'Noto Serif', 'Nova Cut' => 'Nova Cut', 'Nova Flat' => 'Nova Flat', 'Nova Mono' => 'Nova Mono', 'Nova Oval' => 'Nova Oval', 'Nova Round' => 'Nova Round', 'Nova Script' => 'Nova Script', 'Nova Slim' => 'Nova Slim', 'Nova Square' => 'Nova Square', 'Numans' => 'Numans', 'Nunito' => 'Nunito', 'Odor Mean Chey' => 'Odor Mean Chey', 'Offside' => 'Offside', 'Old Standard TT' => 'Old Standard TT', 'Oldenburg' => 'Oldenburg', 'Oleo Script' => 'Oleo Script', 'Oleo Script Swash Caps' => 'Oleo Script Swash Caps', 'Open Sans' => 'Open Sans', 'Open Sans Condensed' =>'Open Sans Condensed', 'Oranienbaum' => 'Oranienbaum', 'Orbitron' => 'Orbitron', 'Oregano' => 'Oregano', 'Orienta' => 'Orienta', 'Original Surfer' => 'Original Surfer', 'Oswald' => 'Oswald', 'Over the Rainbow' => 'Over the Rainbow', 'Overlock' => 'Overlock', 'Overlock SC' => 'Overlock SC', 'Ovo' => 'Ovo', 'Oxygen' => 'Oxygen', 'Oxygen Mono' => 'Oxygen Mono', 'PT Mono' => 'PT Mono', 'PT Sans' => 'PT Sans', 'PT Sans Caption' => 'PT Sans Caption', 'PT Sans Narrow' => 'PT Sans Narrow', 'PT Serif' => 'PT Serif', 'PT Serif Caption' => 'PT Serif Caption', 'Pacifico' => 'Pacifico', 'Palanquin' => 'Palanquin', 'Palanquin Dark' => 'Palanquin Dark', 'Paprika' => 'Paprika', 'Parisienne' => 'Parisienne', 'Passero One' => 'Passero One', 'Passion One' => 'Passion One', 'Pathway Gothic One' => 'Pathway Gothic One', 'Patrick Hand' => 'Patrick Hand', 'Patrick Hand SC' => 'Patrick Hand SC', 'Pattaya' => 'Pattaya', 'Patua One' => 'Patua One', 'Pavanam' => 'Pavanam', 'Paytone One' => 'Paytone One', 'Peddana' => 'Peddana', 'Peralta' => 'Peralta', 'Permanent Marker' => 'Permanent Marker', 'Petit Formal Script' => 'Petit Formal Script', 'Petrona' => 'Petrona', 'Philosopher' => 'Philosopher', 'Piedra' => 'Piedra', 'Pinyon Script' => 'Pinyon Script', 'Pirata One' => 'Pirata One', 'Plaster' => 'Plaster', 'Play' => 'Play', 'Playball' => 'Playball', 'Playfair Display' => 'Playfair Display', 'Playfair Display SC' => 'Playfair Display SC', 'Podkova' => 'Podkova', 'Poiret One' => 'Poiret One', 'Poller One' => 'Poller One', 'Poly' => 'Poly', 'Pompiere' => 'Pompiere', 'Pontano Sans' => 'Pontano Sans', 'Poppins' => 'Poppins', 'Port Lligat Sans' => 'Port Lligat Sans', 'Port Lligat Slab' => 'Port Lligat Slab', 'Pragati Narrow' => 'Pragati Narrow', 'Prata' => 'Prata', 'Preahvihear' => 'Preahvihear', 'Press Start 2P' => 'Press Start 2P', 'Pridi' => 'Pridi', 'Princess Sofia' => 'Princess Sofia', 'Prociono' => 'Prociono', 'Prompt' => 'Prompt', 'Prosto One' => 'Prosto One', 'Proza Libre' => 'Proza Libre', 'Puritan' => 'Puritan', 'Purple Purse' => 'Purple Purse', 'Quando' => 'Quando', 'Quantico' => 'Quantico', 'Quattrocento' => 'Quattrocento', 'Quattrocento Sans' => 'Quattrocento Sans', 'Questrial' => 'Questrial', 'Quicksand' => 'Quicksand', 'Quintessential' => 'Quintessential', 'Qwigley' => 'Qwigley', 'Racing Sans One' => 'Racing Sans One', 'Radley' => 'Radley', 'Rajdhani'=> 'Rajdhani', 'Rakkas' => 'Rakkas', 'Raleway' => 'Raleway', 'Raleway Dots' => 'Raleway Dots', 'Ramabhadra' => 'Ramabhadra', 'Ramaraja' => 'Ramaraja', 'Rambla' => 'Rambla', 'Rammetto One' => 'Rammetto One', 'Ranchers' => 'Ranchers', 'Rancho', 'Ranga', 'Rasa', 'Rationale', 'Ravi Prakash', 'Redressed', 'Reem Kufi', 'Reenie Beanie', 'Revalia' => 'Revalia', 'Rhodium Libre' => 'Rhodium Libre', 'Ribeye' => 'Ribeye', 'Ribeye Marrow' => 'Ribeye Marrow', 'Righteous' => 'Righteous', 'Risque' => 'Risque', 'Roboto' => 'Roboto', 'Roboto Condensed' => 'Roboto Condensed', 'Roboto Mono' => 'Roboto Mono', 'Roboto Slab' => 'Roboto Slab', 'Rochester' => 'Rochester', 'Rock Salt' => 'Rock Salt', 'Rokkitt' => 'Rokkitt', 'Romanesco' => 'Romanesco', 'Ropa Sans' => 'Ropa Sans', 'Rosario' => 'Rosario', 'Rosarivo' => 'Rosarivo', 'Rouge Script' => 'Rouge Script', 'Rozha One' => 'Rozha One', 'Rubik' => 'Rubik', 'Rubik Mono One' => 'Rubik Mono One', 'Rubik One' => 'Rubik One', 'Ruda' => 'Ruda', 'Rufina' => 'Rufina', 'Ruge Boogie' => 'Ruge Boogie', 'Ruluko' => 'Ruluko', 'Rum Raisin' => 'Rum Raisin', 'Ruslan Display' => 'Ruslan Display', 'Russo One => Russo One', 'Ruthie' => 'Ruthie', 'Rye' => 'Rye', 'Sacramento' => 'Sacramento', 'Sahitya' => 'Sahitya', 'Sail' => 'Sail', 'Salsa' => 'Salsa', 'Sanchez' => 'Sanchez', 'Sancreek' => 'Sancreek', 'Sansita One' => 'Sansita One', 'Sarala' => 'Sarala', 'Sarina' => 'Sarina', 'Sarpanch' => 'Sarpanch', 'Satisfy' => 'Satisfy', 'Scada' => 'Scada', 'Scheherazade' => 'Scheherazade', 'Schoolbell' => 'Schoolbell', 'Scope One' => 'Scope One', 'Seaweed Script' => 'Seaweed Script', 'Secular One' => 'Secular One', 'Sevillana' => 'Sevillana', 'Seymour One' => 'Seymour One', 'Shadows Into Light' => 'Shadows Into Light', 'Shadows Into Light Two' => 'Shadows Into Light Two', 'Shanti' => 'Shanti', 'Share' => 'Share', 'Share Tech' => 'Share Tech', 'Share Tech Mono' => 'Share Tech Mono', 'Shojumaru' => 'Shojumaru', 'Short Stack' => 'Short Stack', 'Shrikhand' => 'Shrikhand', 'Siemreap' => 'Siemreap' , 'Sigmar One' => 'Sigmar One', 'Signika' => 'Signika', 'Signika Negative' => 'Signika Negative', 'Simonetta' => 'Simonetta', 'Sintony' => 'Sintony', 'Sirin Stencil' => 'Sirin Stencil', 'Six Caps' => 'Six Caps', 'Skranji' => 'Skranji', 'Slabo 13px' => 'Slabo 13px', 'Slabo 27px' => 'Slabo 27px', 'Slackey' => 'Slackey', 'Smokum' => 'Smokum', 'Smythe' => 'Smythe', 'Sniglet' => 'Sniglet', 'Snippet' => 'Snippet', 'Snowburst One' =>'Snowburst One', 'Sofadi One' => 'Sofadi One', 'Sofia' => 'Sofia', 'Sonsie One' => 'Sonsie One', 'Sorts Mill Goudy' => 'Sorts Mill Goudy', 'Source Code Pro' => 'Source Code Pro', 'Source Sans Pro' => 'Source Sans Pro', 'Source Serif Pro' => 'Source Serif Pro', 'Space Mono' => 'Space Mono', 'Special Elite' => 'Special Elite', 'Spicy Rice' => 'Spicy Rice', 'Spinnaker' => 'Spinnaker', 'Spirax' => 'Spirax', 'Squada One' => 'Squada One', 'Sree Krushnadevaraya', 'Sriracha', 'Stalemate', 'Stalinist One', 'Stardos Stencil', 'Stint Ultra Condensed', 'Stint Ultra Expanded' => 'Stint Ultra Expanded', 'Stoke' => 'Stoke', 'Strait' => 'Strait', 'Sue Ellen Francisco' => 'Sue Ellen Francisco', 'Suez One' => 'Suez One', 'Sumana' => 'Sumana', 'Sunshiney' => 'Sunshiney', 'Supermercado One' => 'Supermercado One', 'Sura' => 'Sura', 'Suranna' => 'Suranna', 'Suravaram' => 'Suravaram', 'Suwannaphum' => 'Suwannaphum', 'Swanky and Moo Moo' => 'Swanky and Moo Moo', 'Syncopate' => 'Syncopate', 'Tangerine' => 'Tangerine', 'Taprom' => 'Taprom', 'Tauri' => 'Tauri', 'Taviraj' => 'Taviraj', 'Teko' => 'Teko', 'Telex' => 'Telex', 'Tenali Ramakrishna' => 'Tenali Ramakrishna', 'Tenor Sans' => 'Tenor Sans', 'Text Me One' => 'Text Me One', 'The Girl Next Door' => 'The Girl Next Door', 'Tienne' => 'Tienne', 'Tillana' => 'Tillana', 'Timmana' => 'Timmana', 'Tinos' => 'Tinos', 'Titan One' => 'Titan One', 'Titillium Web' => 'Titillium Web', 'Trade Winds' => 'Trade Winds', 'Trirong' => 'Trirong', 'Trocchi' => 'Trocchi', 'Trochut' =>'Trochut', 'Trykker' => 'Trykker', 'Tulpen One' => 'Tulpen One', 'Ubuntu' => 'Ubuntu', 'Ubuntu Condensed' => 'Ubuntu Condensed', 'Ubuntu Mono' => 'Ubuntu Mono', 'Ultra' => 'Ultra', 'Uncial Antiqua' => 'Uncial Antiqua', 'Underdog' => 'Underdog', 'Unica One' => 'Unica One', 'UnifrakturCook' => 'UnifrakturCook', 'UnifrakturMaguntia' => 'UnifrakturMaguntia', 'Unkempt' => 'Unkempt', 'Unlock' => 'Unlock', 'Unna' => 'Unna', 'VT323' => 'VT323', 'Vampiro One' => 'Vampiro One', 'Varela', 'Varela Round', 'Vast Shadow', 'Vesper Libre', 'Vibur', 'Vidaloka', 'Viga', 'Voces', 'Volkhov' => 'Volkhov', 'Vollkorn' => 'Vollkorn', 'Voltaire' => 'Voltaire', 'Waiting for the Sunrise' => 'Waiting for the Sunrise', 'Wallpoet' => 'Wallpoet', 'Walter Turncoat' => 'Walter Turncoat', 'Warnes' => 'Warnes', 'Wellfleet' => 'Wellfleet', 'Wendy One' => 'Wendy One', 'Wire One' => 'Wire One', 'Work Sans' => 'Work Sans', 'Yanone Kaffeesatz' => 'Yanone Kaffeesatz', 'Yantramanav' => 'Yantramanav', 'Yatra One' => 'Yatra One', 'Yellowtail' => 'Yellowtail' , 'Yeseva One' => 'Yeseva One', 'Yesteryear' => 'Yesteryear', 'Yrsa' => 'Yrsa', 'Zeyada' => 'Zeyada');

$font_style = array('normal'=>'Normal','italic'=>'Italic');

// General typography section
	$wp_customize->add_section( 'innofit_general_typography' , array(
			'title'      => esc_html__('General Paragraph','innofit'),
			'panel' => 'innofit_typography_setting',
			'priority'       => 1,
	   	) );

	$wp_customize->add_setting(
	    'general_typography_fontfamily',
	    array(
	        'default'           =>  'Dosis',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('general_typography_fontfamily', array(
			'label' => esc_html__('Font family','innofit'),
	        'section' => 'innofit_general_typography',
			'setting' => 'general_typography_fontfamily',
			'type'    =>  'select',
			'choices'=>$font_family,
	));

	$wp_customize->add_setting(
	    'general_typography_fontsize',
	    array(
	        'default'           =>  13,
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('general_typography_fontsize', array(
			'label' => esc_html__('Font size (px)','innofit'),
	        'section' => 'innofit_general_typography',
			'setting' => 'general_typography_fontsize',
			'type'    =>  'select',
			'choices'=>$font_size,
	    ));

	$wp_customize->add_setting('general_typography_line_height',
    array(
        'default'           =>  23,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('general_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_general_typography',
	        'setting' => 'general_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// Header typography section
    $wp_customize->add_section('innofit_header_typography', array(
        'title' => esc_html__('Header', 'innofit'),
        'panel' => 'innofit_typography_setting',
        'priority' => 2,
    ));
	// Enable/Disable Header typography section
    $wp_customize->add_setting(
            'enable_header_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_header_typography', array(
        'label' => esc_html__('Enable Header Typography', 'innofit'),
        'section' => 'innofit_header_typography',
        'setting' => 'enable_header_typography',
        'type' => 'checkbox'
    ));

    class WP_Sitetitle_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Site Title', 'innofit'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'site_title',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Sitetitle_Customize_Control($wp_customize, 'site_title', array(
                'section' => 'innofit_header_typography',
                'setting' => 'site_title',
                    ))
    );
    $wp_customize->add_setting(
            'site_title_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('site_title_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_header_typography',
        'setting' => 'site_title_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'site_title_fontsize',
            array(
                'default' => 36,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('site_title_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_header_typography',
        'setting' => 'site_title_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

     $wp_customize->add_setting(
    'site_title_line_height',
    array(
        'default'           =>  46,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('site_title_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_header_typography',
	        'setting' => 'site_title_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

    class WP_Sitetagline_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Site Tagline', 'innofit'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'site_tagline',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Sitetagline_Customize_Control($wp_customize, 'site_tagline', array(
                'section' => 'innofit_header_typography',
                'setting' => 'site_tagline',
                    ))
    );
    $wp_customize->add_setting(
            'site_tagline_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('site_tagline_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_header_typography',
        'setting' => 'site_tagline_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'site_tagline_fontsize',
            array(
                'default' => 20,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('site_tagline_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_header_typography',
        'setting' => 'site_tagline_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

     $wp_customize->add_setting(
    'site_tagline_line_height',
    array(
        'default'           =>  30,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('site_tagline_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_header_typography',
	        'setting' => 'site_title_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// Menus typography section
	$wp_customize->add_section( 'innofit_menus_typography' , array(
			'title'      => esc_html__('Menus', 'innofit'),
			'panel' => 'innofit_typography_setting',
			'priority'       => 2,
	   	) );

	$wp_customize->add_setting(
	    'menu_title_fontfamily',
	    array(
	        'default'           =>  'Dosis',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('menu_title_fontfamily', array(
			'label' => esc_html__('Font family','innofit'),
	        'section' => 'innofit_menus_typography',
			'setting' => 'menu_title_fontfamily',
			'type'    =>  'select',
			'choices'=>$font_family,
	));

	$wp_customize->add_setting(
	    'menu_title_fontsize',
	    array(
	        'default'           =>  18,
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('menu_title_fontsize', array(
			'label' => esc_html__('Font size','innofit'),
	        'section' => 'innofit_menus_typography',
			'setting' => 'menu_title_fontsize',
			'type'    =>  'select',
			'choices'=>$font_size,
	    ));

     $wp_customize->add_setting(
    'menu_title_line_height',
    array(
        'default'           =>  28,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('menu_title_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_menus_typography',
	        'setting' => 'menu_title_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

    class WP_SubMenus_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Submenus', 'innofit'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'submenus_title',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_SubMenus_Customize_Control($wp_customize, 'submenus_title', array(
                'section' => 'innofit_menus_typography',
                'setting' => 'submenus_title',
                    ))
    );
    $wp_customize->add_setting(
            'submenu_title_fontfamily',
            array(
                'default'  =>  'Dosis',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('submenu_title_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_menus_typography',
        'setting' => 'submenu_title_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'submenu_title_fontsize',
            array(
                'default' => 15,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('submenu_title_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_menus_typography',
        'setting' => 'submenu_title_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

     $wp_customize->add_setting(
    'submenu_title_line_height',
    array(
        'default'           =>  25,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('submenu_title_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_menus_typography',
	        'setting' => 'submenu_title_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

	// Section title typography section
	$wp_customize->add_section( 'innofit_service_typography' , array(
			'title'      => esc_html__('Section Title', 'innofit'),
			'panel' => 'innofit_typography_setting',
			'priority'       => 4,
	   	) );

	$wp_customize->add_setting(
	    'section_title_fontfamily',
	    array(
	        'default'           =>  'Dosis',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('section_title_fontfamily', array(
			'label' => esc_html__('Font family','innofit'),
	        'section' => 'innofit_service_typography',
			'setting' => 'section_title_fontfamily',
			'type'    =>  'select',
			'choices'=>$font_family,
	));

	$wp_customize->add_setting(
	    'section_title_fontsize',
	    array(
	        'default'           =>  36,
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('section_title_fontsize', array(
			'label' => esc_html__('Font size (px)','innofit'),
	        'section' => 'innofit_service_typography',
			'setting' => 'section_title_fontsize',
			'type'    =>  'select',
			'choices'=>$font_size,
	    ));


    $wp_customize->add_setting(
    'section_title_line_height',
    array(
        'default'           =>  46,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('section_title_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_service_typography',
	        'setting' => 'section_title_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// Section description typography section
	$wp_customize->add_section( 'innofit_section_description_typography' , array(
			'title'      => esc_html__('Section Description', 'innofit'),
			'panel' => 'innofit_typography_setting',
			'priority'       => 5,
	   	) );
	$wp_customize->add_setting(
	    'section_description_fontfamily',
	    array(
	        'default'           =>  'Dosis',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('section_description_fontfamily', array(
			'label' => esc_html__('Font family','innofit'),
	        'section' => 'innofit_section_description_typography',
			'setting' => 'section_description_fontfamily',
			'type'    =>  'select',
			'choices'=>$font_family,
	));

	$wp_customize->add_setting(
	    'section_description_fontsize',
	    array(
	        'default'           =>  18,
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('section_description_fontsize', array(
			'label' => esc_html__('Font size (px)','innofit'),
	        'section' => 'innofit_section_description_typography',
			'setting' => 'section_description_fontsize',
			'type'    =>  'select',
			'choices'=>$font_size,
	    ));


	$wp_customize->add_setting(
    'section_description_line_height',
    array(
        'default'           =>  28,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('section_description_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_section_description_typography',
	        'setting' => 'section_description_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));


// Content typography section
    $wp_customize->add_section('innofit_content_typography', array(
        'title' => esc_html__('Content', 'innofit'),
        'panel' => 'innofit_typography_setting',
        'priority' => 5,
    ));
	// Enable/Disable Content typography section
    $wp_customize->add_setting(
            'enable_content_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_content_typography', array(
        'label' => esc_html__('Enable Content Typography', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'enable_content_typography',
        'type' => 'checkbox'
    ));

// h1 typography settings
    class WP_Content_H1_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 1 (H1)', 'innofit'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h1',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H1_Customize_Control($wp_customize, 'content_h1', array(
                'section' => 'innofit_content_typography',
                'setting' => 'content_h1',
                    ))
    );
    $wp_customize->add_setting(
            'h1_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h1_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h1_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'h1_typography_fontsize',
            array(
                'default' => 36,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h1_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h1_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

    $wp_customize->add_setting(
    'h1_typography_line_height',
    array(
        'default'           =>  46,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('h1_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_content_typography',
	        'setting' => 'h1_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// h2 typography settings
    class WP_Content_H2_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 2 (H2)', 'innofit'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h2',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H2_Customize_Control($wp_customize, 'content_h2', array(
                'section' => 'innofit_content_typography',
                'setting' => 'content_h2',
                    ))
    );
    $wp_customize->add_setting(
            'h2_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h2_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h2_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'h2_typography_fontsize',
            array(
                'default' => 30,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h2_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h2_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));


    $wp_customize->add_setting(
    'h2_typography_line_height',
    array(
        'default'           =>  40,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('h2_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_content_typography',
	        'setting' => 'h2_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));
// h3 typography settings
    class WP_Content_H3_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 3 (H3)', 'innofit'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h3',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H3_Customize_Control($wp_customize, 'content_h3', array(
                'section' => 'innofit_content_typography',
                'setting' => 'content_h3',
                    ))
    );
    $wp_customize->add_setting(
            'h3_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h3_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h3_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'h3_typography_fontsize',
            array(
                'default' => 24,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h3_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h3_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

	$wp_customize->add_setting(
    'h3_typography_line_height',
    array(
        'default'           =>  34,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('h3_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_content_typography',
	        'setting' => 'h6_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// h4 typography settings
    class WP_Content_H4_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 4 (H4)', 'innofit'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h4',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H4_Customize_Control($wp_customize, 'content_h4', array(
                'section' => 'innofit_content_typography',
                'setting' => 'content_h4',
                    ))
    );
    $wp_customize->add_setting(
            'h4_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h4_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h4_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'h4_typography_fontsize',
            array(
                'default' => 20,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h4_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h4_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

	$wp_customize->add_setting(
    'h4_typography_line_height',
    array(
        'default'           =>  30,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('h4_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_content_typography',
	        'setting' => 'h6_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// h5 typography settings
    class WP_Content_H5_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 5 (H5)', 'innofit'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h5',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H5_Customize_Control($wp_customize, 'content_h5', array(
                'section' => 'innofit_content_typography',
                'setting' => 'content_h5',
                    ))
    );
    $wp_customize->add_setting(
            'h5_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h5_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h5_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'h5_typography_fontsize',
            array(
                'default' => 20,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h5_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h5_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

	$wp_customize->add_setting(
    'h5_typography_line_height',
    array(
        'default'           =>  30,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('h5_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_content_typography',
	        'setting' => 'h5_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// h6 typography settings
    class WP_Content_H6_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 6 (H6)', 'innofit'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h6',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H6_Customize_Control($wp_customize, 'content_h6', array(
                'section' => 'innofit_content_typography',
                'setting' => 'content_h6',
                    ))
    );
    $wp_customize->add_setting(
            'h6_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h6_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h6_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));

    $wp_customize->add_setting(
            'h6_typography_fontsize',
            array(
                'default' => 14,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('h6_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'h6_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));


    $wp_customize->add_setting(
    'h6_typography_line_height',
    array(
        'default'           =>  24,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('h6_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_content_typography',
	        'setting' => 'h6_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// Button text typography settings
    class WP_Content_button_text_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Button Text', 'innofit'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_button_text',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_button_text_Customize_Control($wp_customize, 'content_button_text', array(
                'section' => 'innofit_content_typography',
                'setting' => 'content_button_text',
                    ))
    );
    $wp_customize->add_setting(
            'button_text_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('button_text_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'button_text_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));

    $wp_customize->add_setting(
            'button_text_typography_fontsize',
            array(
                'default' => 15,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('button_text_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_content_typography',
        'setting' => 'button_text_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

    $wp_customize->add_setting(
    'button_text_typography_line_height',
    array(
        'default'           =>  25,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('button_text_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_content_typography',
	        'setting' => 'button_text_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// Blog Page/Archive/Single Post typography
    $wp_customize->add_section('innofit_post_typography', array(
        'title' => esc_html__('Blog / Archive / Single Post', 'innofit'),
        'panel' => 'innofit_typography_setting',
        'priority' => 5,
    ));
	// Enable/Disable Blog/Archive/Single Post typography
    $wp_customize->add_setting(
            'enable_post_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_post_typography', array(
        'label' => esc_html__('Enable Blog / Archive / Single Post Typography', 'innofit'),
        'section' => 'innofit_post_typography',
        'setting' => 'enable_post_typography',
        'type' => 'checkbox'
    ));
    $wp_customize->add_setting(
            'post-title_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('post-title_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_post_typography',
        'setting' => 'post-title_fontfamily',
        'type' => 'select',
        'choices' => $font_family,
    ));
    $wp_customize->add_setting(
            'post-title_fontsize',
            array(
                'default' => 36,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('post-title_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_post_typography',
        'setting' => 'post-title_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

 	$wp_customize->add_setting(
    'post-title_line_height',
    array(
        'default'           =>  46,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('post-title_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_post_typography',
	        'setting' => 'post-title_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// Shop Page typography
    $wp_customize->add_section('innofit_shop_page_typography', array(
        'title' => esc_html__('Shop Page', 'innofit'),
        'panel' => 'innofit_typography_setting',
        'priority' => 5,
    ));
	// Enable/Disable Shop Page typography
    $wp_customize->add_setting(
            'enable_shop_page_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_shop_page_typography', array(
        'label' => esc_html__('Enable Shop Page Typography', 'innofit'),
        'section' => 'innofit_shop_page_typography',
        'setting' => 'enable_shop_page_typography',
        'type' => 'checkbox'
    ));

    // h1 typography settings
	class WP_Shop_Content_H1_Customize_Control extends WP_Customize_Control {
	    public $type = 'new_menu';
	    /**
	    * Render the control's content.
	    */
	    public function render_content() {
	    ?>
		 <h3><?php esc_html_e('Heading 1 (H1)','innofit'); ?></h3>
		 <p><?php esc_html_e('Only for product detail page','innofit'); ?></p>
	    <?php
	    }
	}

	$wp_customize->add_setting(
	    'shop_content_h1',
	    array(
	        'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	$wp_customize->add_control( new WP_Shop_Content_H1_Customize_Control( $wp_customize, 'shop_content_h1', array(
			'section' => 'innofit_shop_page_typography',
			'setting' => 'shop_content_h1',
	    ))
	);
	$wp_customize->add_setting(
	    'shop_h1_typography_fontfamily',
	    array(
	        'default'           =>  'Open Sans',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('shop_h1_typography_fontfamily', array(
			'label' => esc_html__('Font family','innofit'),
	        'section' => 'innofit_shop_page_typography',
			'setting' => 'shop_h1_typography_fontfamily',
			'type'    =>  'select',
			'choices'=>$font_family
	));
	$wp_customize->add_setting(
	    'shop_h1_typography_fontsize',
	    array(
	        'default'           =>  36,
			'capability'        =>  'edit_theme_options',
			'sanitize_callback' =>  'sanitize_text_field',
	    )
	);
	$wp_customize->add_control('shop_h1_typography_fontsize', array(
			'label' => __('Font size (px)','innofit'),
	        'section' => 'innofit_shop_page_typography',
			'setting' => 'shop_h1_typography_fontsize',
			'type'    =>  'select',
			'choices'=>$font_size,

	    ));

	$wp_customize->add_setting(
    'shop_h1_typography_line_height',
    array(
        'default'           =>  46,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('shop_h1_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_shop_page_typography',
	        'setting' => 'shop_h1_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

	// h2 typography settings
    class WP_Shop_Content_H2_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 2 (H2)', 'innofit'); ?></h3>
            <p><?php esc_html_e('Only for product title in shop page', 'innofit'); ?></p>
            <?php
        }

    }

    $wp_customize->add_setting(
            'shop_content_h2',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Shop_Content_H2_Customize_Control($wp_customize, 'shop_content_h2', array(
                'section' => 'innofit_shop_page_typography',
                'setting' => 'shop_content_h2',
                    ))
    );
    $wp_customize->add_setting(
            'shop_h2_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('shop_h2_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_shop_page_typography',
        'setting' => 'shop_h2_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'shop_h2_typography_fontsize',
            array(
                'default' => 18,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('shop_h2_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_shop_page_typography',
        'setting' => 'shop_h2_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

    $wp_customize->add_setting(
    'shop_h2_typography_line_height',
    array(
        'default'           =>  28,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('shop_h2_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_shop_page_typography',
	        'setting' => 'shop_h2_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));


// h3 typography settings
    class WP_Shop_Content_H3_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 3 (H3)', 'innofit'); ?></h3>
            <p><?php esc_html_e('Only for product checkout page', 'innofit'); ?></p>
            <?php
        }

    }

    $wp_customize->add_setting(
            'shop_content_h3',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Shop_Content_H3_Customize_Control($wp_customize, 'shop_content_h3', array(
                'section' => 'innofit_shop_page_typography',
                'setting' => 'shop_content_h3',
                    ))
    );
    $wp_customize->add_setting(
            'shop_h3_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('shop_h3_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'innofit'),
        'section' => 'innofit_shop_page_typography',
        'setting' => 'shop_h3_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'shop_h3_typography_fontsize',
            array(
                'default' => 24,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_home_page_sanitize_text',
            )
    );
    $wp_customize->add_control('shop_h3_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'innofit'),
        'section' => 'innofit_shop_page_typography',
        'setting' => 'shop_h3_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));

    $wp_customize->add_setting(
    'shop_h3_typography_line_height',
    array(
        'default'           =>  34,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
	);
	$wp_customize->add_control('shop_h3_typography_line_height', array(
	        'label' => esc_html__('Line height (px)','innofit'),
	        'section' => 'innofit_shop_page_typography',
	        'setting' => 'shop_h3_typography_line_height',
	        'type'    =>  'select',
	        'choices'=>$line_height,
	));

// Widget typography section
$wp_customize->add_section( 'innofit_widget_typography' , array(
		'title'      => esc_html__('Widget Heading Title', 'innofit'),
		'panel' => 'innofit_typography_setting',
		'priority'       => 6,
   	) );

$wp_customize->add_setting(
    'widgets_title_fontfamily',
    array(
        'default'           =>  'Dosis',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
    )
);
$wp_customize->add_control('widgets_title_fontfamily', array(
		'label' => esc_html__('Font family','innofit'),
        'section' => 'innofit_widget_typography',
		'setting' => 'widgets_title_fontfamily',
		'type'    =>  'select',
		'choices'=>$font_family,
));

$wp_customize->add_setting(
    'widgets_title_fontsize',
    array(
        'default'           =>  18,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
    )
);
$wp_customize->add_control('widgets_title_fontsize', array(
		'label' => esc_html__('Font size  (px)','innofit'),
        'section' => 'innofit_widget_typography',
		'setting' => 'widgets_title_fontsize',
		'type'    =>  'select',
		'choices'=>$font_size,
    ));

$wp_customize->add_setting(
    'widgets_title_line_height',
    array(
        'default'           =>  28,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
);
$wp_customize->add_control('widgets_title_line_height', array(
        'label' => esc_html__('Line height (px)','innofit'),
        'section' => 'innofit_widget_typography',
        'setting' => 'widgets_title_line_height',
        'type'    =>  'select',
        'choices'=>$line_height,
));

// Widget content typography section

$wp_customize->add_section( 'innofit_widgets_content_typography' , array(
		'title'      => esc_html__('Widget Content', 'innofit'),
		'panel' => 'innofit_typography_setting',
		'priority'       => 6,
   	) );

// Enable/Disable widget content typography
    $wp_customize->add_setting(
            'enable_widget_content_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'innofit_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_widget_content_typography', array(
        'label' => esc_html__('Enable Widget Content typography', 'innofit'),
        'section' => 'innofit_widgets_content_typography',
        'setting' => 'enable_widget_content_typography',
        'type' => 'checkbox'
    ));

class WP_Widget_content_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
	 <h3><?php esc_html_e('Widget Content','innofit'); ?></h3>
    <?php
    }
}
$wp_customize->add_setting(
    'widgets_content',
    array(
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( new WP_Widget_content_Customize_Control( $wp_customize, 'widgets_content', array(
		'section' => 'innofit_widgets_content_typography',
		'setting' => 'widgets_content',
    ))
);
$wp_customize->add_setting(
    'widgets_content_fontfamily',
    array(
        'default'           =>  'Open Sans',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
    )
);
$wp_customize->add_control('widgets_content_fontfamily', array(
		'label' => esc_html__('Font family','innofit'),
        'section' => 'innofit_widgets_content_typography',
		'setting' => 'widgets_content_fontfamily',
		'type'    =>  'select',
		'choices'=>$font_family,
));
$wp_customize->add_setting(
    'widgets_content_fontsize',
    array(
        'default'           =>  16,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
    )
);
$wp_customize->add_control('widgets_content_fontsize', array(
		'label' => esc_html__('Font size (px)','innofit'),
        'section' => 'innofit_widgets_content_typography',
		'setting' => 'widgets_content_fontsize',
		'type'    =>  'select',
		'choices'=>$font_size,
    ));

$wp_customize->add_setting(
    'widgets_content_line_height',
    array(
        'default'           =>  26,
        'capability'        =>  'edit_theme_options',
        'sanitize_callback' =>  'sanitize_text_field',
    )
);
$wp_customize->add_control('widgets_content_line_height', array(
        'label' => esc_html__('Line height (px)','innofit'),
        'section' => 'innofit_widgets_content_typography',
        'setting' => 'widgets_content_line_height',
        'type'    =>  'select',
        'choices'=>$line_height,
));

}
