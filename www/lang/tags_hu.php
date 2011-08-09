<?
//  All tags should have translations in www/lang/tags_XX.php, with
//  language strings like "tag:key" for the translation of the key and
//  "tag:key=value" for the translation of the value. E.g.
//  $lang_str["tag:amenity"]=array("Amenity", "Amenities");
//  $lang_str["tag:amenity=bar"]=array("Bar", "Bars");
//
//  Furthermore you can describe the tags with the array $tag_type. Every
//  entry is an array again to further specify its type, e.g.:
//  $tag_type["width"]=array("number", "m", "in");
//                ^             ^       ^    ^
//                |             |       |    \-- the preferred unit in this locale
//                |             |       \------- the default unit for this tag
//                |             \--------------- the type of the value
//                \----------------------------- tag
//
//  This defines, that the default value for the tag width is a number, with
//  its default unit m (for meter) and the preferred unit for this locale is
//  in (for inch).
//
//  The following types are valid:
//  * text          default (e.g. religion, name)
//  * number        a value, with default unit and preferred unit as defined
//                  by the second and third entry in this array (e.g. width,
//                  voltage)
//  * count         an integer value (e.g. population)
//  * date          a date
//  * link          an Internet URL
//
//  NOTE: the $tag_type can already be defined, but it's not used yet.
//  There might also be more tag types soon and a way to format the output
//  (e.g. "100.000 m" or "2010-12-24").

// accomodation
$lang_str["tag:accomodation"]="Szállás";

// address
$lang_str["tag:address"]="Cím";

// addr:housenumber
$lang_str["tag:addr:housenumber"]="Házszám";

// admin_level
$lang_str["tag:admin_level=2"]="Országhatár";
#$lang_str["tag:admin_level=3"]="Divisions";
#$lang_str["tag:admin_level=4"]="State Border";
#$lang_str["tag:admin_level=5"]="Community Border";
#$lang_str["tag:admin_level=6"]="County Border";
$lang_str["tag:admin_level=8"]="Város/község határa";
$lang_str["tag:admin_level=10"]="Kerület";

// amenity
$lang_str["tag:amenity"]="Vendéglátás";
$lang_str["tag:amenity=cinema"]=array("Mozi", "Mozik");
$lang_str["tag:amenity=restaurant"]=array("Étterem", "Éttermek");
$lang_str["tag:amenity=pub"]=array("Kocsma", "Kocsmák");

// building
$lang_str["tag:building=yes"]="Épületek";
$lang_str["tag:building=default"]="Épületek";
$lang_str["tag:building=worship"]="Vallási célú épületek";
$lang_str["tag:building=road_amenities"]="Közlekedést segítő épületek (megállók, díjbeszedő helyek, ...)";
$lang_str["tag:building=nature_building"]="Természetes elemek vagy akadályok";
$lang_str["tag:building=industrial"]="Ipari épületek";
$lang_str["tag:building=education"]="Oktatási épületek";
$lang_str["tag:building=shop"]="Boltok";
$lang_str["tag:building=public"]="Közcélú épületek";
$lang_str["tag:building=military"]="Katonai épületek";
$lang_str["tag:building=historic"]="Történelmi épületek";
$lang_str["tag:building=emergency"]="Segélynyújtó épületek";
$lang_str["tag:building=health"]="Egészségügyi épületek";
$lang_str["tag:building=communication"]="Kommunikációs épületek";
$lang_str["tag:building=residential"]="Lakóépületek";
$lang_str["tag:building=culture"]="Kulturális célú épületek";
$lang_str["tag:building=tourism"]="Turizmust szolgáló épületek";
$lang_str["tag:building=sport"]="Sporthoz kapcsolódó épületek";

// cables
$lang_str["tag:cables"]="Vezetékek";

// cuisine
$lang_str["tag:cuisine"]="Konyha";
$lang_str["tag:cuisine=regional"]="helyi";

// description
$lang_str["tag:description"]="Leírás";

// domination
#$lang_str["tag:domination"]="Domination";

// food
$lang_str["tag:food"]="Lehet ennivalót kapni";

// highway
$lang_str["tag:highway"]=array("Út", "Utak");
$lang_str["tag:highway=motorway"]="Autópálya";
$lang_str["tag:highway=trunk"]="Autóút";
$lang_str["tag:highway=primary"]="Főút";
$lang_str["tag:highway=secondary"]="Összekötő út";
$lang_str["tag:highway=tertiary"]="Bekötőút";
$lang_str["tag:highway=minor"]="Kisebb közút";
#$lang_str["tag:highway=service"]="Service Road";
$lang_str["tag:highway=pedestrian"]="Gyalogos terület";
#$lang_str["tag:highway=track"]="Track";
$lang_str["tag:highway=path"]="Ösvény";

// is_in
$lang_str["tag:is_in"]="Ebben van: ";

// landuse
$lang_str["tag:landuse=park"]="Park";
#$lang_str["tag:landuse=education"]="Area of educational facilities";
#$lang_str["tag:landuse=tourism"]="Area of touristic facilities";
#$lang_str["tag:landuse=garden"]="Farms, Plantages, Gardens";
#$lang_str["tag:landuse=industrial"]="Industrial and Railway Areas";
#$lang_str["tag:landuse=sport"]="Areas of sport facilities";
#$lang_str["tag:landuse=cemetery"]="Cemeteries";
#$lang_str["tag:landuse=residental"]="Residental areas";
#$lang_str["tag:landuse=nature_reserve"]="Nature Reserves";
#$lang_str["tag:landuse=historic"]="Areas with historical value";
#$lang_str["tag:landuse=emergency"]="Areas of emergency facilities";
#$lang_str["tag:landuse=health"]="Areas of health facilities";
#$lang_str["tag:landuse=public"]="Areas for public services";
#$lang_str["tag:landuse=water"]="Water Areas";
// the following tags are deprecated
#$lang_str["tag:landuse=natural|sub_type=t0"]="Woods and Forest";
#$lang_str["tag:landuse=natural|sub_type=t1"]="Wetland";
#$lang_str["tag:landuse=natural|sub_type=t2"]="Glaciers";
#$lang_str["tag:landuse=natural|sub_type=t3"]="Screes, Heaths";
#$lang_str["tag:landuse=natural|sub_type=t4"]="Mud";
#$lang_str["tag:landuse=natural|sub_type=t5"]="Beaches";

// leisure
#$lang_str["tag:leisure=sports_centre"]="Sport Centre";
#$lang_str["tag:leisure=golf_course"]="Golf Course";
#$lang_str["tag:leisure=stadium"]="Stadium";
#$lang_str["tag:leisure=track"]="Track";
#$lang_str["tag:leisure=pitch"]="Pitche";
#$lang_str["tag:leisure=water_park"]="Water Park";
#$lang_str["tag:leisure=marina"]="Marina";
#$lang_str["tag:leisure=slipway"]="Slipway";
#$lang_str["tag:leisure=fishing"]="Fishing";
#$lang_str["tag:leisure=nature_reserve"]="Nature Reserve";
#$lang_str["tag:leisure=park"]="Leisure Park";
#$lang_str["tag:leisure=playground"]="Playground";
#$lang_str["tag:leisure=garden"]="Garden";
#$lang_str["tag:leisure=common"]="Common";
#$lang_str["tag:leisure=ice_rink"]="Ice Rink";
#$lang_str["tag:leisure=miniature_golf"]="Miniature Golf";
#$lang_str["tag:leisure=swimming_pool"]="Swimming Pool";
#$lang_str["tag:leisure=beach_resort"]="Beach Resort";
#$lang_str["tag:leisure=bird_hide"]="Bird Hide";
#$lang_str["tag:leisure=sport"]="Other Sport";

// name
$lang_str["tag:name"]=array("Név", "Nevek");

// network
$lang_str["tag:network"]="Hálózat";

// note
$lang_str["tag:note"]="Megjegyzés";

// old_name
$lang_str["tag:old_name"]="régi név";

// opening_hours
$lang_str["tag:opening_hours"]="Nyitvatartás";

// operator
$lang_str["tag:operator"]="Kezelő";

// place
$lang_str["tag:place"]="Hely";
$lang_str["tag:place=continent"]=array("Kontinens", "Kontinensek");
$lang_str["tag:place=country"]=array("Ország", "Országok");
#$lang_str["tag:place=state"]=array("State", "States");
#$lang_str["tag:place=region"]=array("Region", "Regions");
#$lang_str["tag:place=county"]=array("County", "Counties");
$lang_str["tag:place=city"]=array("Város", "Városok");
$lang_str["tag:place=town"]="Kisváros";
$lang_str["tag:place=village"]=array("Falu", "Faluk");
#$lang_str["tag:place=suburb"]=array("Suburb", "Suburbs");
#$lang_str["tag:place=locality"]=array("Locality", "Localities");
$lang_str["tag:place=island"]=array("Sziget", "Szigetek");
#$lang_str["tag:place=islet"]=array("Islet", "Islets");
// the following tags are deprecated
#$lang_str["tag:place=city;population>1000000"]=array("City, > 1 Mio Inhabitants", "Cities, > 1 Mio Inhabitants");
#$lang_str["tag:place=city;population>200000"]=array("City, > 200.000 Inhabitants", "Cities, > 200.000 Inhabitants");
#$lang_str["tag:place=town"]="Town";
#$lang_str["tag:place=town;population>30000"]=array("Town, > 30.000 Inhabitants", "Towns, > 30.000 Inhabitants");

// population
$lang_str["tag:population"]="népesség";
$tag_type["population"]=array("count");

// power
#$lang_str["tag:power"]="Power";
#$lang_str["tag:power=generator"]="Power Generator";
#$lang_str["tag:power=line"]="Power Line";
#$lang_str["tag:power=tower"]="Power Tower";
#$lang_str["tag:power=pole"]="Power Pole";
#$lang_str["tag:power=station"]="Power Station";
#$lang_str["tag:power=sub_station"]="Power Substation";

// power_source
#$lang_str["tag:power_source"]="Power source";
$lang_str["tag:power_source=biofuel"]="Biohajtóanyag";
$lang_str["tag:power_source=oil"]="Olay";
$lang_str["tag:power_source=coal"]="Szén";
$lang_str["tag:power_source=gas"]="Gáz";
$lang_str["tag:power_source=waste"]="Hulladék";
$lang_str["tag:power_source=hydro"]="Vízi";
#$lang_str["tag:power_source=tidal"]="Tidal";
$lang_str["tag:power_source=wave"]="Hullám";
$lang_str["tag:power_source=geothermal"]="Geotermális";
$lang_str["tag:power_source=nuclear"]="Nukleáris";
$lang_str["tag:power_source=fusion"]="Fúziós";
$lang_str["tag:power_source=wind"]="Szél";
$lang_str["tag:power_source=photovoltaic"]="Napelemes";
#$lang_str["tag:power_source=solar-thermal"]="Solar Thermal";

// real_ale
#$lang_str["tag:real_ale"]="Real ale offered";

// religion
$lang_str["tag:religion"]="Vallás";
$lang_str["tag:religion=christian"]=array("keresztény");

// route
$lang_str["tag:route=train"]="Vasút";
$lang_str["tag:route=railway"]="Vasút";
$lang_str["tag:route=rail"]="Vasút";
#$lang_str["tag:route=light_rail"]="Light Rail";
$lang_str["tag:route=subway"]="Metró/földalatti";
$lang_str["tag:route=tram"]="Villamos";
$lang_str["tag:route=trolley"]="Trolibusz";
$lang_str["tag:route=trolleybus"]="Trolibusz";
$lang_str["tag:route=bus"]="Busz";
$lang_str["tag:route=minibus"]="Kisbusz";
$lang_str["tag:route=ferry"]="Komp";
#$lang_str["tag:route=road"]="Road";
$lang_str["tag:route=bicycle"]="Kerékpár";
$lang_str["tag:route=hiking"]="Túra";
$lang_str["tag:route=mtb"]="Mountainbike";

// route_type
// the following tags are deprecated
#$lang_str["tag:route_type"]="Route type";

// shop
$lang_str["tag:shop"]="Bolt";

// sport
$lang_str["tag:sport"]="Sport";
#$lang_str["tag:sport=9pin"]="9pin Bowling";
#$lang_str["tag:sport=10pin"]="10pin Bowling";
$lang_str["tag:sport=archery"]="Íjászat";
$lang_str["tag:sport=athletics"]="Atlétika";
#$lang_str["tag:sport=australian_football"]="Australian Football";
$lang_str["tag:sport=baseball"]="Baseball";
$lang_str["tag:sport=basketball"]="Kosárlabda";
#$lang_str["tag:sport=beachvolleyball"]="Beachvolleyball";
#$lang_str["tag:sport=boules"]="Boules";
#$lang_str["tag:sport=bowls"]="Bowls";
#$lang_str["tag:sport=canoe"]="Canoe";
$lang_str["tag:sport=chess"]="Sakk";
#$lang_str["tag:sport=climbing"]="Climbing";
#$lang_str["tag:sport=cricket"]="Cricket";
#$lang_str["tag:sport=cricket_nets"]="Cricket Nets";
#$lang_str["tag:sport=croquet"]="Croquet";
$lang_str["tag:sport=cycling"]="Kerékpározás";
#$lang_str["tag:sport=diving"]="Diving";
#$lang_str["tag:sport=dog_racing"]="Dog Racing";
#$lang_str["tag:sport=equestrian"]="Equestrian";
$lang_str["tag:sport=football"]="Labdarúgás";
$lang_str["tag:sport=golf"]="Golf";
#$lang_str["tag:sport=gymnastics"]="Gymnastics";
#$lang_str["tag:sport=hockey"]="Hockey";
#$lang_str["tag:sport=horse_racing"]="Horse Racing";
#$lang_str["tag:sport=korfball"]="Korfball";
$lang_str["tag:sport=motor"]="Motor";
$lang_str["tag:sport=multi"]="Többféle";
$lang_str["tag:sport=orienteering"]="Tájékozódási futás";
#$lang_str["tag:sport=paddle_tennis"]="Paddle Tennis";
#$lang_str["tag:sport=paragliding"]="Paragliding";
#$lang_str["tag:sport=pelota"]="Pelota";
#$lang_str["tag:sport=racquet"]="Racquet";
$lang_str["tag:sport=rowing"]="Evezés";
#$lang_str["tag:sport=rugby"]="Rugby";
$lang_str["tag:sport=shooting"]="Célbalövés";
$lang_str["tag:sport=skating"]="Korcsolyázás";
#$lang_str["tag:sport=skateboard"]="Skateboard";
#$lang_str["tag:sport=skiing"]="Skiing";
#$lang_str["tag:sport=soccer"]="Soccer";
#$lang_str["tag:sport=swimming"]="Swimming";
$lang_str["tag:sport=table_tennis"]="Asztalitenisz";
$lang_str["tag:sport=team_handball"]="Kézilabda";
$lang_str["tag:sport=tennis"]="Tenisz";
$lang_str["tag:sport=volleyball"]="Röplabda";

// vending
#$lang_str["tag:vending"]="Vending";

// voltage
#$lang_str["tag:voltage"]="Voltage";
$tag_type["voltage"]=array("number", "V", "V");

// wires
#$lang_str["tag:wires"]="Wires";
$tag_type["wires"]=array("count");

// website
#$lang_str["tag:website"]="Website";
$tag_type["website"]=array("link");



