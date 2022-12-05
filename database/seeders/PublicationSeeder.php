<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publication;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publications = [
            [
                'url'  => 'url_image/ciutat/alley-gcc29857a6_1280.jpg',
                'description' => 'Quisque eu posuere massa. Nam vehicula malesuada pulvinar. Quisque sit amet egestas felis. Fusce porta fringilla volutpat. Morbi ac tincidunt ipsum. Duis vel ligula non lacus tincidunt vehicula. Mauris hendrerit ullamcorper posuere. Ut porttitor justo quam, vel iaculis tortor pulvinar ut. Phasellus urna lacus, ultrices eget lectus quis, tincidunt semper purus. Sed aliquam justo nec diam ultricies mattis. Maecenas volutpat ut neque vel luctus.',
                'user_id'  => 1,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/ciutat/aqueduct-g6ff5e094b_1280.jpg',
                'description' => 'Proin sem est, lobortis rhoncus nunc vitae, porttitor vestibulum velit. Proin luctus nisl vel tortor vulputate venenatis. Mauris elementum sit amet arcu vel lobortis. Ut suscipit nisi purus, at finibus diam blandit varius. Nullam viverra nulla eu tellus molestie malesuada. Nulla quis accumsan ligula. Proin ligula lectus, porttitor sed libero sit amet, elementum mattis tortor. Vivamus auctor gravida neque, eget finibus orci rutrum quis. Nulla consequat ligula ac justo lacinia congue.',
                'user_id'  => 2,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/ciutat/bridge-g888e1bedb_1280.jpg',
                'description' => 'Cras hendrerit libero nec dolor rutrum, a ultricies felis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam aliquet augue vel porta feugiat. Pellentesque a ornare quam. Maecenas id tristique nisl. Vestibulum viverra est tellus, eget gravida nisi imperdiet in. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis arcu eros, lobortis quis condimentum eget, fermentum ac diam. Praesent sit amet nulla varius, ullamcorper ipsum vitae, dictum eros. Vestibulum quis neque tempor, dapibus enim vel, accumsan lacus. Aliquam at velit ut orci tempus consequat et at enim. Fusce efficitur nisl ut ligula gravida, vehicula tincidunt velit consequat. Sed pharetra velit arcu.',
                'user_id'  => 3,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/ciutat/cathedral-gcc50d909e_1280.jpg',
                'description' => 'Sed sollicitudin tortor lacus, id tempus sem ullamcorper at. Pellentesque et nibh ullamcorper, congue purus at, congue dolor. Morbi lacinia, risus ut cursus interdum, dui urna ornare ex, quis mattis ex nisl eget leo. Curabitur eu condimentum lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas nec ante vitae nisi tincidunt auctor. Etiam ut ultrices nunc.',
                'user_id'  => 4,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/ciutat/girona-gdc8a6153e_1280.jpg',
                'description' => 'Quisque ac iaculis tellus, ut lacinia nisl. Fusce suscipit maximus felis. Aliquam pulvinar non elit eget pulvinar. Suspendisse quis condimentum ex, sed lobortis mi. Integer maximus, arcu et fringilla sagittis, orci elit ullamcorper augue, sed fringilla lorem lorem maximus magna. Pellentesque et quam tortor. Praesent quis ullamcorper nunc. Vestibulum vitae quam dolor. Etiam tortor nisl, mollis sed luctus a, lobortis dictum lorem. Curabitur imperdiet molestie volutpat. Praesent tristique luctus ante, in dictum massa faucibus eu.',
                'user_id'  => 5,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/ciutat/la-seu-vella-g955b028e7_1280.jpg',
                'description' => 'Pellentesque massa ligula, tristique vestibulum tortor eu, mattis malesuada nisl. Integer condimentum justo at lacus scelerisque, ac auctor libero interdum. Vestibulum faucibus et orci feugiat commodo. Sed non commodo arcu, non lobortis nibh. Ut in turpis rutrum, sollicitudin tortor ac, dignissim massa. Aenean non nibh sagittis, lacinia nibh ac, aliquam velit. Mauris purus metus, varius id porttitor et, bibendum a tellus. Mauris egestas gravida elit. Nullam sit amet euismod sapien, ut tincidunt eros. Integer tincidunt nibh eu dui tincidunt, nec blandit turpis consectetur. Sed feugiat tincidunt lacus ut cursus. Nunc consectetur pretium porttitor. Integer eget efficitur sem. Proin ac orci velit. Duis pulvinar libero ut sollicitudin cursus. Praesent fringilla libero felis, at blandit sapien luctus sed.',
                'user_id'  => 6,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/ciutat/prague-g4f1a6caa7_1280.jpg',
                'description' => 'Donec sodales consectetur diam, a placerat risus commodo quis. Nulla volutpat ac nunc eget tincidunt. Vestibulum vel volutpat elit. Aliquam ut sapien ut ipsum sodales ullamcorper. Donec aliquam, enim at iaculis sagittis, enim dui vestibulum orci, et commodo eros lectus ut turpis. Integer elementum ac lectus ac pharetra. Donec lobortis rutrum sem in maximus.',
                'user_id'  => 7,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/ciutat/ships-ge61fe604c_1280.jpg',
                'description' => 'Praesent auctor nisl et porttitor tincidunt. Vivamus rhoncus diam non neque auctor placerat. Curabitur pulvinar convallis quam at posuere. Nullam facilisis malesuada felis, quis placerat tortor molestie vehicula. Nulla pulvinar leo non massa luctus rhoncus. Vivamus maximus, ipsum accumsan viverra dignissim, orci dui scelerisque ante, nec molestie nisl justo vel orci. Etiam lobortis pulvinar elit, sed porttitor velit pulvinar vel.',
                'user_id'  => 8,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/ciutat/tarragona-gc6ae00816_1280.jpg',
                'description' => 'Aliquam nec neque purus. Vivamus vel orci a lectus consectetur congue. Duis nisi augue, lobortis ut est et, dignissim bibendum sapien. Curabitur metus massa, convallis vitae lacus nec, tristique vulputate enim. Sed finibus dapibus lectus commodo efficitur. Fusce hendrerit dui urna, ut facilisis lorem feugiat luctus. Fusce ut ornare ipsum. Sed blandit, magna at dignissim ultrices, sapien nulla commodo tortor, vitae tincidunt ligula urna at quam. Suspendisse leo leo, cursus vitae turpis quis, pulvinar ornare nisl. Proin posuere quam ac dignissim accumsan. Cras erat arcu, pretium id suscipit ac, placerat non lectus. Nunc felis enim, pellentesque eget nisi sed, scelerisque posuere nunc. Proin et tellus diam. Mauris eu tristique nunc. In hac habitasse platea dictumst. Quisque bibendum, purus at sagittis pharetra, arcu libero cursus arcu, ac fringilla quam elit id quam.',
                'user_id'  => 9,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/ciutat/travel-gafec7ff82_1280.jpg',
                'description' => 'Pellentesque magna odio, dapibus non malesuada eu, euismod quis metus. Sed tristique lacus in porta malesuada. Phasellus eu fringilla justo. Ut sed erat ultrices, posuere urna vel, efficitur purus. Mauris ornare aliquet suscipit. Sed laoreet sed orci sed luctus. Donec ut nisi vitae massa blandit egestas. Curabitur vel est ac nibh interdum posuere.',
                'user_id'  => 10,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/costa/beach-g3d05d4770_1280.jpg',
                'description' => 'Sed dignissim sem eu lacinia eleifend. Fusce sit amet neque rutrum, varius nisi sed, pharetra massa. Praesent at sollicitudin est, vel porttitor sapien. Ut vel auctor est. Donec efficitur, dolor ac pellentesque sodales, mauris leo faucibus dolor, at ultricies purus mauris et sapien. Pellentesque tincidunt placerat nibh, sit amet accumsan turpis ultrices vitae. Pellentesque a elit gravida, tincidunt enim sed, ullamcorper ipsum. Sed dignissim, nulla vitae auctor posuere, est risus tristique risus, nec ullamcorper mauris velit sed erat. Praesent metus metus, viverra convallis faucibus at, efficitur eget nulla. Suspendisse fringilla leo nisl, a iaculis odio accumsan ut. Nunc enim urna, viverra ut placerat et, volutpat sit amet neque.',
                'user_id'  => 11,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/costa/boat-g75aba84d5_1280.jpg',
                'description' => 'Praesent eu eros velit. Ut suscipit rutrum ex viverra congue. Suspendisse potenti. Phasellus faucibus dictum dapibus. Mauris sit amet pretium leo. Integer ut lectus vitae nunc tincidunt mollis eu et ipsum. Vivamus pretium sapien quis ligula blandit commodo. Aliquam eget mauris pharetra leo facilisis pulvinar. Aenean eleifend, dui ac euismod commodo, risus magna rhoncus arcu, et rhoncus libero ipsum ac mauris. Nullam luctus libero et eros euismod pulvinar. Nunc maximus, enim vel venenatis pharetra, massa quam pulvinar sem, luctus molestie velit eros vitae justo. Pellentesque vel felis eget quam vestibulum posuere sed pharetra dolor. Ut porta vestibulum vulputate.',
                'user_id'  => 12,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/costa/cadaques-g370cf4faf_1280.jpg',
                'description' => 'Nam a fermentum nisi. Curabitur molestie nec ex quis suscipit. Ut pulvinar libero in ante efficitur, ut fringilla diam auctor. Donec ut fringilla lectus. Quisque a neque bibendum, fermentum est vulputate, ullamcorper ligula. Sed condimentum purus vitae diam congue, vitae ornare dui mollis. Duis eget commodo massa, pellentesque pellentesque nisi.',
                'user_id'  => 13,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/costa/girl-gb3bac375c_1280.jpg',
                'description' => 'Nullam luctus mi lacus, sed porta neque lacinia vitae. Morbi ac mauris eros. Vestibulum ornare nibh non nulla hendrerit pulvinar quis ac augue. Nullam quis vestibulum diam. Duis id felis sit amet sem dictum lacinia vel vel ante. Maecenas dictum ac nunc vel pretium. Duis congue nunc ac diam luctus vehicula. Phasellus aliquet, massa nec bibendum rutrum, purus velit tristique mi, elementum ullamcorper ante sem et tortor.',
                'user_id'  => 14,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/costa/landscape-gf452351c4_1280.jpg',
                'description' => 'Nam pellentesque facilisis neque, in eleifend sapien convallis et. Duis fringilla consequat efficitur. Donec orci libero, varius at elit id, lacinia rutrum enim. Morbi sit amet felis sit amet ex dignissim fermentum quis vel enim. Fusce malesuada eget elit eget consequat. Nulla ac est faucibus, consequat diam quis, pulvinar nulla. Cras laoreet, lacus nec placerat interdum, dui sem placerat lectus, vitae fringilla odio eros eget tortor. Proin et congue dui. Donec massa nulla, rutrum vel felis ac, ultrices dictum sapien. Suspendisse ornare rutrum elit ut scelerisque. Integer interdum risus diam, vel fermentum magna aliquam quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc lacinia vestibulum ligula sed viverra. Aliquam tincidunt sapien vitae velit fringilla, ac consectetur purus suscipit. Phasellus fermentum odio ut augue pulvinar, a volutpat est ultricies. Aliquam ornare cursus commodo.',
                'user_id'  => 15,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/costa/sant-joan-g4934501f6_1280.jpg',
                'description' => 'In hac habitasse platea dictumst. Maecenas ut mauris non est fermentum rutrum vitae ac nibh. In ligula enim, gravida et nisi at, faucibus volutpat est. Donec sapien lacus, ultrices nec justo a, lacinia fringilla ipsum. Etiam et neque fermentum, vulputate est ut, congue magna. Etiam vitae vulputate ipsum. Aenean auctor neque ac hendrerit fringilla. Sed posuere libero ac semper finibus.',
                'user_id'  => 16,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/costa/sea-g469c4b797_1280.jpg',
                'description' => 'Morbi vitae neque velit. Duis velit lacus, sollicitudin ac arcu quis, volutpat dignissim dolor. Quisque quam ante, accumsan at mauris vitae, finibus congue mi. Nulla justo mauris, condimentum vel lectus at, imperdiet faucibus magna. Proin ut lectus cursus, mattis dui nec, semper neque. Aliquam odio neque, aliquet eget ante sit amet, mollis consequat mi. Phasellus ultrices scelerisque odio, sed venenatis libero fringilla consequat. Mauris viverra, ante sit amet accumsan pharetra, arcu tortor egestas arcu, eu suscipit arcu lectus feugiat justo. Cras suscipit euismod faucibus. Quisque ligula nisl, auctor quis volutpat eu, fringilla sit amet urna.',
                'user_id'  => 17,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/costa/sea-g597e9138e_1280.jpg',
                'description' => 'Proin pellentesque tristique justo ut commodo. Nulla in ipsum magna. Nam tincidunt ac leo vitae hendrerit. Praesent nec finibus neque. Cras volutpat, risus nec lobortis tempus, tortor sem laoreet urna, a fermentum nisi velit ut dolor. Donec ac iaculis libero. Integer pretium faucibus metus, vitae efficitur felis accumsan id. Proin imperdiet dictum turpis et aliquet. Maecenas vitae interdum lorem, in tempor felis.',
                'user_id'  => 18,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/costa/sea-g15309faa5_1280.jpg',
                'description' => 'Etiam eu orci mattis, rhoncus velit quis, consequat diam. Donec laoreet nibh felis. Proin lectus ipsum, posuere sit amet lorem a, malesuada viverra arcu. Maecenas tempus libero in ligula vestibulum porttitor. Fusce et finibus enim. Aenean porta elit eros, a fringilla leo commodo in. Nunc eget mauris id dolor sagittis accumsan. In pretium, erat non aliquet cursus, justo nulla dapibus neque, eu tincidunt elit risus at tortor. Aenean et turpis eget ante consectetur sollicitudin. Quisque eget accumsan nisi, sit amet gravida ex. Nullam pharetra aliquam iaculis.',
                'user_id'  => 19,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/costa/sea-g28307412f_1280.jpg',
                'description' => 'In lobortis, ligula at maximus tincidunt, ante eros interdum mauris, in gravida velit lacus sit amet sapien. Quisque convallis varius suscipit. Sed eu nisi sed est pellentesque blandit. Praesent vehicula faucibus ipsum, et luctus quam vestibulum at. Duis nec ligula sit amet felis accumsan gravida. Cras quis facilisis justo. Suspendisse condimentum dui quis sapien molestie ornare. Praesent ac eros sit amet magna rhoncus vulputate ut in urna. Maecenas ultricies eleifend justo, et cursus est porta eget. Maecenas convallis nunc a nisl hendrerit suscipit. Sed tempor euismod dignissim. In posuere nunc orci. Curabitur fringilla faucibus vehicula. Sed consequat gravida odio. Pellentesque elit elit, venenatis sed ornare eget, viverra at est. Curabitur blandit augue at purus pellentesque fermentum.',
                'user_id'  => 20,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/esportsAventura/adventure-g76df1e3ef_1280.jpg',
                'description' => 'Mauris consequat vehicula magna, vitae condimentum diam condimentum sit amet. Duis rhoncus diam laoreet lacus rutrum maximus. Aliquam vitae mauris rhoncus, dapibus elit vitae, vulputate eros. Etiam ipsum turpis, congue vel fermentum ac, gravida nec sem. Mauris in leo nisi. Etiam dapibus ex ut diam cursus, ut luctus metus vestibulum. Ut id risus lacus. Curabitur dapibus nisl est, sed elementum odio dapibus eu.',
                'user_id'  => 5,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/esportsAventura/bike-g2eea26ad7_1280.jpg',
                'description' => 'Aliquam rutrum nec dui ac aliquam. Nullam velit nisi, lacinia et elit at, ornare lobortis purus. Curabitur sed augue a sapien aliquet semper ut vitae massa. Quisque imperdiet porta lacus, sit amet mattis urna iaculis at. Praesent in turpis ultricies, consectetur ligula porta, accumsan tellus. Ut viverra sagittis felis et finibus. Nullam sit amet nibh congue lacus porta sodales vitae non ligula. Morbi ultrices blandit ligula, vitae faucibus quam pretium non. Nunc risus sem, commodo eu pretium ac, vestibulum nec libero. Vestibulum gravida augue a nulla tincidunt, at cursus ipsum iaculis. Curabitur quis nulla velit. In ac nisl felis. Pellentesque congue ipsum non ultrices sodales. Pellentesque enim eros, tempus a metus ac, volutpat euismod purus. In hac habitasse platea dictumst. Praesent at blandit erat.',
                'user_id'  => 12,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/esportsAventura/canoe-g1a1c392ac_1280.jpg',
                'description' => 'Phasellus porta neque vel erat suscipit, sit amet aliquam dui pretium. Duis rhoncus ornare tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque sagittis porttitor vehicula. Sed lobortis mi mollis, fermentum ipsum id, luctus eros. Maecenas convallis luctus nibh non convallis. Nullam volutpat augue nec arcu semper cursus. Donec cursus augue quis mattis cursus. Morbi ac nisi ut elit eleifend dictum. Fusce at enim sit amet enim commodo euismod non et mauris. Vivamus mollis eros augue, a euismod dolor hendrerit ut. Suspendisse nec orci quis justo ullamcorper finibus. In iaculis vestibulum lectus condimentum egestas. Nam nec leo arcu. Donec gravida diam nec commodo pretium. Sed bibendum vulputate magna, nec aliquet ligula.',
                'user_id'  => 18,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/esportsAventura/climbing-g2edfc5c6b_1280.jpg',
                'description' => 'Morbi sed porta lorem, nec volutpat lacus. Ut malesuada nibh ac scelerisque ornare. Mauris pellentesque fringilla nibh et vehicula. Aliquam viverra hendrerit ultricies. Praesent et justo euismod, dictum est sit amet, euismod mauris. In hac habitasse platea dictumst. Pellentesque convallis arcu id justo vulputate, vitae commodo tellus lacinia. Sed molestie turpis sit amet placerat ullamcorper. Phasellus vitae erat non mauris rutrum ullamcorper. Maecenas nec eros ante. Maecenas leo purus, dignissim at arcu et, ornare consectetur lectus. In hac habitasse platea dictumst. Vestibulum commodo ipsum id efficitur convallis. Donec fringilla scelerisque arcu, sit amet aliquet tellus posuere eget.',
                'user_id'  => 8,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/esportsAventura/cycling-g2447cc367_1280.jpg',
                'description' => 'Sed porta at ex quis semper. Quisque vitae mauris luctus, suscipit ante sed, porta dui. Vestibulum at nibh quis tellus venenatis luctus in non sapien. Duis gravida risus odio, malesuada euismod enim facilisis ut. Morbi pretium feugiat purus, viverra rutrum libero mollis a. Mauris nec lorem sit amet orci pellentesque congue venenatis in magna. Nullam bibendum ut ante eget tempor. Donec vulputate ante nec erat gravida, eu mattis lectus commodo. Integer suscipit justo in eros iaculis pulvinar. Vestibulum aliquet cursus leo. Cras vitae vehicula felis. Fusce molestie, nibh non sodales ultricies, nulla nunc pulvinar arcu, quis blandit nisl sem id neque.',
                'user_id'  => 7,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/esportsAventura/rafting-g1231d05de_1280.jpg',
                'description' => 'Proin et dolor semper, fringilla libero eu, egestas massa. In hac habitasse platea dictumst. Duis dignissim viverra congue. Cras lacus magna, condimentum non facilisis sit amet, viverra quis sapien. Pellentesque tempor sem vitae massa luctus, quis sodales est aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean non nulla a ex scelerisque dignissim.',
                'user_id'  => 20,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/esportsAventura/snow-g077e3237a_1280.jpg',
                'description' => 'Vivamus sed justo volutpat, efficitur neque eget, finibus nisi. Pellentesque venenatis eu est id efficitur. Quisque enim velit, tristique ornare nisi at, ultricies vestibulum tortor. Quisque blandit tortor eros, dapibus convallis purus sodales sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam pulvinar fermentum tortor eget tincidunt. Duis eu elit rhoncus, tincidunt dolor nec, imperdiet est. Phasellus fringilla ligula ut rutrum facilisis. Cras consequat erat a odio feugiat pharetra. In sed odio eget ipsum rutrum fringilla sed at ipsum. Etiam viverra dui tellus, eu efficitur urna porta sit amet. Sed ut felis quis leo consectetur ultricies quis ut augue. Nullam justo libero, dignissim vel tincidunt at, interdum vitae purus. Sed sollicitudin vitae arcu eget dignissim. Duis ultrices rhoncus turpis vitae cursus. Nunc mauris arcu, eleifend id mollis sollicitudin, pharetra sed diam.',
                'user_id'  => 19,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/esportsAventura/snow-g95ae2e55f_1280.jpg',
                'description' => 'Pellentesque semper aliquam consectetur. In efficitur, elit sed lobortis rhoncus, nibh leo sodales ipsum, vitae consectetur risus augue ut enim. Vivamus id lorem sed velit interdum ultrices eu a elit. Suspendisse ac ipsum et massa viverra sagittis. Suspendisse porta, augue a vehicula rutrum, nibh tellus viverra ante, vitae molestie nisl tellus at velit. Maecenas ut iaculis purus. Nulla ac efficitur metus. Nam volutpat egestas turpis et consectetur. Vestibulum volutpat diam quis est convallis, vitae sodales quam feugiat.',
                'user_id'  => 11,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/esportsAventura/sports-g00cfbe443_1280.jpg',
                'description' => 'Nunc at tempus tellus. Nam tortor libero, laoreet in dapibus vitae, egestas tincidunt purus. Nullam ac felis lacinia ipsum ultricies feugiat varius nec libero. Nam convallis lorem quis mauris maximus, sit amet sollicitudin ipsum lobortis. Etiam ullamcorper, est in ultrices blandit, odio enim rutrum sem, et aliquet ex ipsum sed sem. Mauris at ipsum vehicula neque imperdiet aliquam eget et elit. Aliquam consectetur quis purus vitae mollis. Proin sed ligula maximus, commodo massa ac, gravida tortor. Nulla dignissim mollis est ac dapibus. Morbi aliquet cursus orci, sit amet bibendum lectus. Nam vitae neque massa. Suspendisse potenti. Etiam vel elit purus. Nunc hendrerit, augue vitae consequat faucibus, mauris urna vestibulum eros, at vestibulum turpis ante a lectus. Pellentesque cursus justo sollicitudin mi tincidunt rutrum. Duis fermentum rhoncus turpis a porta.',
                'user_id'  => 12,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/esportsAventura/surfer-g136c18932_1280.jpg',
                'description' => 'Vivamus tempor fringilla lacus, sed mollis dolor rutrum at. Aenean interdum at elit nec maximus. Aenean vehicula mauris volutpat eros maximus, non gravida diam ullamcorper. Sed aliquam ante quis odio fermentum porttitor. Pellentesque felis nunc, pulvinar quis metus ut, tempor vestibulum elit. Donec vitae convallis nisl. Etiam efficitur elementum nisl, eget pellentesque massa blandit at. Nulla et massa vel ligula vehicula semper nec id dolor. Aliquam cursus augue ante, eu sollicitudin est lacinia a. Suspendisse nec lobortis augue. Nulla tincidunt eros vitae tincidunt euismod.',
                'user_id'  => 5,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/gastronomia/beans-g64deccde0_1280.jpg',
                'description' => 'Sed vehicula felis ut tellus tempus scelerisque. Etiam ultrices ligula at malesuada imperdiet. Nunc sagittis sed magna ac sagittis. Nunc in tempus justo. Duis hendrerit velit quis elit ornare placerat. Vestibulum varius ligula non lacus fringilla vestibulum. Integer ornare sem sit amet nisl posuere, ac ultricies nisi posuere. Praesent tempus, nibh ac pharetra varius, ligula purus tempus nunc, congue sagittis dolor risus at enim. Maecenas porta diam interdum sagittis luctus. Ut lectus eros, laoreet quis ante non, pulvinar gravida mi. Donec hendrerit posuere leo. Quisque nec lobortis purus. Vivamus iaculis, eros quis condimentum semper, mauris eros congue dolor, eget ultrices nunc nibh non arcu. Praesent vehicula sit amet justo eu lacinia. Sed eget finibus sapien. Cras sagittis vel dolor ac convallis.',
                'user_id'  => 3,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/gastronomia/breads-g73c267eef_1280.jpg',
                'description' => 'Mauris finibus pharetra lacus at efficitur. Curabitur congue, ante ac finibus ullamcorper, augue justo iaculis dui, in accumsan massa ligula ac sapien. Phasellus fringilla mauris nulla, malesuada aliquam ipsum consectetur dapibus. Nullam ut rhoncus ligula. Morbi vehicula, elit in blandit condimentum, est odio vestibulum mauris, eu ultrices lectus est in elit. Vivamus mattis ultricies sapien sed placerat. Maecenas id nisl porta, laoreet leo sed, fermentum tellus. Suspendisse sit amet quam condimentum, semper est quis, tincidunt magna. Donec mollis, lacus ut lobortis condimentum, diam mauris varius nulla, sit amet hendrerit metus tellus at purus. Maecenas blandit elementum volutpat. Morbi bibendum quam vitae tellus iaculis dapibus.',
                'user_id'  => 2,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/gastronomia/breakfast-g496f4a0ed_1280.jpg',
                'description' => 'Nullam faucibus ante nec nulla aliquet euismod. Curabitur nisi magna, sollicitudin nec ligula aliquet, cursus tempor turpis. Integer at luctus sem. Integer ex eros, consequat id quam quis, laoreet vulputate turpis. Pellentesque egestas accumsan pulvinar. Nam mattis metus in dapibus fermentum. Nam et nunc et nulla consectetur sollicitudin. Aenean commodo dui a lectus ullamcorper, sed egestas ipsum luctus. Sed sollicitudin laoreet pretium.',
                'user_id'  => 1,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/gastronomia/cafe-g4c135e3d5_1280.jpg',
                'description' => 'Phasellus varius elit vitae justo rutrum, at accumsan libero tempus. Etiam vitae nunc tempus, porta ex rutrum, mollis odio. Nulla varius fringilla tortor, eu ornare leo ullamcorper sed. Morbi ac laoreet metus, auctor vestibulum nisi. Maecenas massa risus, rhoncus ac nibh id, ullamcorper consequat augue. Mauris hendrerit elementum consectetur. Suspendisse tincidunt sagittis neque, sed ultrices dolor. Nulla placerat rutrum nibh, sed fringilla lorem suscipit ac. Ut rhoncus facilisis lectus quis consectetur. Duis congue sapien eu iaculis rutrum.',
                'user_id'  => 18,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/gastronomia/food-g4a5842429_1280.jpg',
                'description' => 'Suspendisse velit ipsum, porttitor a tincidunt sed, pharetra eget ipsum. Maecenas non nisl vitae lacus tristique commodo. Quisque sit amet tellus accumsan, auctor ipsum et, congue metus. Vestibulum rhoncus augue nibh, a posuere nibh semper id. Proin in dui leo. Vestibulum in sagittis ex, eu tempus tellus. Donec fermentum iaculis tellus id vestibulum. In hac habitasse platea dictumst. Quisque porttitor consequat nunc, in finibus nibh laoreet eu. Sed sit amet ex sit amet leo rhoncus luctus. Donec orci nulla, congue vulputate tempus dictum, vehicula sed massa. Etiam pulvinar tellus ut viverra gravida. Nullam suscipit convallis auctor. Quisque dignissim vel risus in semper.',
                'user_id'  => 20,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/gastronomia/food-g399f6d774_1280.jpg',
                'description' => 'Maecenas quis sapien mi. Vestibulum quis auctor lacus. Nullam imperdiet venenatis aliquam. Quisque egestas libero eu libero feugiat varius. Morbi enim libero, porttitor accumsan iaculis a, maximus vel nisi. Nunc sollicitudin vel turpis nec congue. Suspendisse id odio sed nulla varius vestibulum at vitae purus. Aenean egestas ut tellus ullamcorper euismod. Curabitur fringilla, lorem vel molestie dictum, magna quam interdum justo, a lacinia lectus velit quis nibh. Praesent eu suscipit justo, hendrerit mollis tortor. Suspendisse faucibus elit risus, eu pellentesque mi mattis id. Mauris dapibus dictum maximus.',
                'user_id'  => 11,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/gastronomia/pancakes-gcb2503c20_1280.jpg',

                'description' => 'Maecenas vel tortor et felis placerat convallis. Nulla facilisi. Sed venenatis ligula sit amet nulla porta congue. Nulla neque dolor, varius ut arcu at, luctus suscipit eros. Curabitur vel lectus dui. Suspendisse a odio mauris. Morbi malesuada velit erat, sit amet semper risus dignissim et. Integer rutrum, leo et consectetur viverra, arcu nunc facilisis justo, et eleifend magna ante eget magna. Curabitur varius luctus ipsum tincidunt feugiat. Aenean vitae eleifend risus, nec ultrices mauris. Donec tincidunt tortor at diam dignissim efficitur. Fusce molestie et metus id fermentum. Fusce id ornare augue, sed finibus turpis.',
                'user_id'  => 12,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/gastronomia/platter-g339f0ecb0_1280.jpg',
                'description' => 'Donec ac neque ante. Aenean magna felis, venenatis sit amet quam vel, accumsan bibendum lorem. Quisque egestas sagittis massa. Praesent efficitur imperdiet dui, in aliquam sem fringilla ut. Nunc a sapien vitae diam sollicitudin tristique a ut urna. In vitae lacus molestie, vulputate enim nec, pulvinar magna. Vivamus tortor ligula, bibendum et sagittis tincidunt, sollicitudin quis dui. Aliquam scelerisque vestibulum urna quis mollis. Proin augue turpis, cursus a euismod quis, suscipit sit amet neque. Suspendisse vitae lectus eleifend, rutrum neque sed, lacinia urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed vel luctus risus, efficitur condimentum arcu. Sed et dui at enim vestibulum pharetra. Aenean sagittis magna ante, rutrum blandit nisl condimentum id. Donec ac maximus risus. Nullam faucibus neque et dui tristique, at tincidunt augue tincidunt.',
                'user_id'  => 10,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/gastronomia/seafood-g9314cc57f_1280.jpg',
                'description' => 'Cras nibh est, sollicitudin nec iaculis nec, hendrerit non nisl. Pellentesque vitae risus ut orci convallis cursus et sit amet massa. Pellentesque nunc tortor, cursus ac lacinia in, tristique in nisi. Maecenas sit amet tempor turpis. Integer porta volutpat turpis vulputate consectetur. Nulla facilisi. Aenean ut ante diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ullamcorper imperdiet imperdiet.',
                'user_id'  => 18,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/gastronomia/service-ga0b139c83_1280.jpg',
                'description' => 'Phasellus neque lacus, posuere volutpat diam sed, gravida efficitur augue. Sed ac massa porta, maximus tellus quis, luctus ipsum. Curabitur ultricies leo at lobortis tempus. Curabitur sed lectus scelerisque, tempor nulla sed, tincidunt lacus. Praesent scelerisque lacinia rhoncus. Aenean ullamcorper, lectus sit amet vulputate elementum, ligula nunc suscipit lorem, auctor vestibulum est sapien ut eros. Curabitur vitae ultricies massa. Aenean blandit tempor quam ut ornare. Morbi et dolor a nibh iaculis vestibulum et sit amet mi.',
                'user_id'  => 14,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/muntanya/andorra-gcdf12582d_1280.jpg',
                'description' => 'Aenean lorem diam, molestie eget tempor id, condimentum quis quam. Cras ligula lectus, mollis non mollis eu, egestas quis diam. Praesent porta laoreet libero sed semper. Proin ac finibus est. Ut ultricies lacus nunc, eget accumsan dolor auctor vitae. Pellentesque sed risus ac nulla blandit mollis in in mauris. Phasellus malesuada et arcu a condimentum. Vestibulum eu purus non orci tristique ullamcorper. Vestibulum molestie ornare dignissim. Nam eleifend orci nec sapien bibendum, viverra pretium erat vestibulum. Praesent luctus tempus eros, sit amet malesuada ipsum sollicitudin non. Maecenas posuere, felis id ornare euismod, lacus orci consectetur justo, vitae dignissim magna massa nec justo.',
                'user_id'  => 13,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/muntanya/body-of-water-ge7a3f76f1_1280.jpg',

                'description' => 'Quisque faucibus hendrerit bibendum. Vestibulum pretium elementum eros, a volutpat neque auctor vel. Vivamus facilisis vestibulum odio in rhoncus. Suspendisse potenti. Donec eu venenatis tellus. Cras tincidunt sem non nisi suscipit, eu auctor enim dignissim. Nunc vestibulum, libero in aliquet luctus, urna massa suscipit massa, vel dignissim enim lacus pretium dui. Aenean id ultricies metus, bibendum venenatis turpis.',
                'user_id'  => 9,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/muntanya/cable-car-g2ae986ef6_1280.jpg',

                'description' => 'Nunc sodales metus vel nulla pretium, ac egestas mi vestibulum. Morbi purus velit, interdum sed dolor ut, placerat accumsan tortor. Quisque semper mi sed eros hendrerit imperdiet sed non enim. In finibus dictum purus vel faucibus. In fermentum, nibh et lacinia efficitur, quam elit cursus turpis, eu bibendum ligula neque a libero. Morbi facilisis tristique odio, a faucibus dui. Pellentesque magna massa, convallis ut accumsan nec, blandit eget elit. Nunc eget risus sapien. Cras porta sem in arcu egestas, quis euismod sem consequat. Etiam aliquet nec erat ac mattis. Aliquam vitae ultricies nulla. Phasellus eu scelerisque leo. Fusce congue, ex nec blandit ultrices, lectus purus lacinia sapien, sit amet vehicula nibh nibh eget lorem. Etiam tristique dictum purus et ultricies. Proin ac lorem arcu.',
                'user_id'  => 6,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/muntanya/irati-g329a224a7_1280.jpg',
                'description' => 'Proin gravida nisi eget nisi tincidunt, id fermentum augue interdum. Pellentesque pretium consectetur est at ultrices. Etiam maximus nibh id mattis venenatis. Curabitur est turpis, fermentum eget lobortis vitae, convallis placerat nisl. Morbi cursus dui ut auctor fringilla. Ut aliquet, elit quis fermentum laoreet, mauris enim malesuada nibh, sed mollis est velit at purus. Aenean tellus enim, pretium ut elit vitae, imperdiet cursus lectus. Phasellus sodales, lorem in fermentum egestas, ligula arcu maximus nisi, sed porttitor tortor sapien id odio. Morbi lacus arcu, pulvinar mattis dolor vel, vestibulum condimentum elit. Nullam quis nulla volutpat, pharetra erat a, mattis ipsum. Phasellus ultricies malesuada felis sed pretium. Duis efficitur ut purus a pulvinar. Nullam sollicitudin odio ut ante gravida, tincidunt varius turpis rhoncus. Aenean volutpat urna vel nisl posuere interdum.',
                'user_id'  => 4,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/muntanya/lake-g1b299f854_1280.jpg',
                'description' => 'Donec tempus odio eget mattis tristique. Sed auctor accumsan elit, vitae finibus nulla. Duis vel feugiat purus. Donec odio augue, venenatis sit amet maximus nec, faucibus in mi. Aliquam tempor ligula egestas aliquet imperdiet. Aliquam id mattis mi, id interdum lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris tempus at quam ac interdum. Quisque ligula nunc, ultrices vel consectetur vitae, mollis id leo.',
                'user_id'  => 5,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/muntanya/ordesa-g4c19d3504_1280.jpg',
                'description' => 'Pellentesque nunc leo, egestas in libero id, dapibus sollicitudin nisi. Ut maximus elit eget turpis finibus, in consectetur diam accumsan. Nullam eget neque ut mauris congue maximus. Aliquam et libero id urna mollis luctus. Integer consequat finibus augue, a lacinia turpis mattis sed. Sed vitae porttitor justo, id gravida elit. Proin elementum id mauris sit amet interdum. Integer vehicula, neque quis porta molestie, elit mauris consequat mi, vitae dignissim sapien turpis vel metus. Vestibulum ut tempus tortor.',
                'user_id'  => 14,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/muntanya/pyrenees-g4b43d7932_1280.jpg',
                'description' => 'Morbi vitae varius dui. Maecenas mi lectus, malesuada ac lorem sit amet, eleifend consectetur tellus. Pellentesque eget urna viverra, efficitur augue sed, lacinia risus. Donec sollicitudin nibh et lacus sagittis vulputate. Suspendisse potenti. Donec ultrices pretium justo eget iaculis. Suspendisse tincidunt a ante posuere volutpat. Donec tristique ornare eleifend. Curabitur sit amet venenatis est. Suspendisse nibh mauris, suscipit vitae erat quis, vulputate dapibus libero. In dictum iaculis scelerisque. Aenean vulputate sed erat sit amet facilisis. Praesent vel mollis dolor.',
                'user_id'  => 15,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/muntanya/pyrenees-g048001005_1280.jpg',

                'description' => 'Cras eu ipsum bibendum, gravida turpis eu, hendrerit justo. Suspendisse a euismod elit. Maecenas consequat tortor a luctus hendrerit. Donec vitae bibendum ante. Proin faucibus dui eget dui gravida vehicula. Nullam sed tristique velit, id luctus felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus sit amet euismod orci, ut sagittis ante. Quisque vestibulum gravida risus at pharetra.',
                'user_id'  => 18,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/muntanya/pyrenees-gec6683e61_1280.jpg',
                'description' => 'Ut sollicitudin, neque eu luctus porttitor, odio ante venenatis sapien, in auctor lorem nibh volutpat libero. Aliquam commodo nisi id risus tincidunt, ut molestie justo efficitur. Mauris vitae fringilla risus. Vestibulum et nunc orci. Vestibulum vel maximus ex. Phasellus luctus odio nec purus tempus, eu tincidunt eros porttitor. Donec a elit vitae diam suscipit hendrerit. Etiam eu metus ullamcorper, blandit justo congue, varius urna. Fusce at fringilla lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam in elementum eros, blandit convallis tortor. Maecenas sed tristique nibh, facilisis bibendum eros. Vestibulum eros est, molestie condimentum volutpat vitae, porttitor vitae est. Cras tempor pharetra velit. Maecenas vitae lectus sagittis, condimentum eros quis, aliquam ante.',
                'user_id'  => 17,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/muntanya/river-g99469b6c9_1280.jpg',
                'description' => 'Nullam pharetra, metus ac ultricies commodo, ex est volutpat sem, ac condimentum odio libero non mi. Vestibulum a libero porttitor, ornare tortor sit amet, pretium dolor. Nulla iaculis egestas laoreet. Maecenas ac mauris viverra, sagittis nisi id, volutpat nunc. Nulla id convallis sem. Pellentesque hendrerit ultricies imperdiet. Nullam tempor mi a bibendum sollicitudin. Mauris tincidunt vitae dui eget pharetra.',
                'user_id'  => 16,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/rural/apples-gf21e4c079_1280.jpg',
                'description' => 'Fusce vulputate quam vitae lorem porta, faucibus egestas purus tempus. Duis maximus nunc vitae ligula vulputate, et lacinia dui egestas. Ut gravida mi vel arcu tincidunt, quis finibus quam tempor. Nulla condimentum commodo purus a laoreet. Ut in sapien ut risus sodales aliquam. Aliquam interdum eget erat vitae venenatis. Morbi bibendum turpis non pretium viverra.',
                'user_id'  => 20,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/rural/autumn-g847c69eef_1280.jpg',
                'description' => 'Nam eu ipsum ante. Cras fringilla quam purus, at condimentum sem maximus vitae. Quisque interdum tellus quis pulvinar sagittis. Integer urna nibh, ultrices a tempus eu, dictum ac orci. Donec sed viverra justo, in interdum velit. Etiam accumsan purus diam, ultrices vulputate lacus tincidunt ut. Curabitur in erat non est ultricies pharetra. Morbi fermentum ligula a felis tempor bibendum. Nulla dignissim ullamcorper ligula at maximus. Mauris consequat felis in metus pretium, vitae pellentesque massa tristique.',
                'user_id'  => 18,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/rural/castle-g304a40d2d_1280.jpg',
                'description' => 'Suspendisse lobortis ex nec magna sodales consequat. Donec tincidunt tincidunt nibh id commodo. Nullam ac dictum ligula. Proin lacinia ex quis pretium cursus. Suspendisse varius imperdiet purus sit amet consectetur. Cras et eros mauris. Aliquam pulvinar massa quam, id gravida nulla auctor sed. Quisque aliquet magna elementum efficitur hendrerit. Mauris ultricies eget neque id laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mollis, orci auctor efficitur eleifend, turpis justo tempus tellus, sed aliquam ex ligula eu mauris. Cras ligula dui, dapibus auctor auctor vitae, porta quis elit. Donec aliquet facilisis lectus non tristique. Donec et sem ac massa maximus consectetur.',
                'user_id'  => 19,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/rural/elderly-g1104e6dbe_1280.jpg',
                'description' => 'Duis ut volutpat eros. Sed libero nisi, imperdiet nec neque ac, blandit dignissim lacus. Sed sapien tortor, tincidunt sed dui sit amet, malesuada pretium lacus. Quisque porttitor lacinia lacinia. Mauris at nunc convallis, pretium leo sollicitudin, porta eros. Nullam mollis, est sit amet egestas egestas, neque ligula tempor elit, at euismod enim sapien ac lorem. Suspendisse aliquet sagittis convallis. Cras sit amet elementum mi. Pellentesque pulvinar malesuada varius.',
                'user_id'  => 6,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/rural/house-g1d4c7509b_1280.jpg',
                'description' => 'Nam vitae tempus magna. Praesent bibendum placerat turpis, ac ornare metus vulputate cursus. Mauris accumsan, nulla sit amet volutpat dapibus, nulla nisl volutpat mauris, a ullamcorper urna est in ex. Phasellus pharetra semper purus ac rhoncus. Nullam nec blandit lectus, vitae suscipit sapien. Nunc feugiat dui egestas purus vulputate, finibus sagittis sapien cursus. Curabitur eu mauris est. Vestibulum ullamcorper justo nec leo semper, ac iaculis justo vestibulum. Integer eget tincidunt justo. Curabitur faucibus, quam in placerat maximus, est nibh vestibulum lorem, quis ornare sem felis eget sapien. Duis non magna ullamcorper libero vestibulum molestie.',
                'user_id'  => 18,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/rural/log-cabin-g29eec821a_1280.jpg',
                'description' => 'Nam tempor feugiat nisi, non aliquam orci consequat vel. Nunc eget nunc vitae ex commodo maximus vel vel urna. Aenean mattis mollis bibendum. Mauris in aliquam massa. Quisque non arcu commodo, rhoncus augue a, rutrum felis. Donec vitae ex nibh. Proin porta ullamcorper orci, ac ultrices lacus ultricies at. In id justo placerat, tincidunt risus id, condimentum justo. Donec non porta eros. Nulla consequat iaculis sapien. Proin non commodo nunc, quis suscipit dui.',
                'user_id'  => 7,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/rural/mother-gfd786b472_1280.jpg',
                'description' => 'Ut enim urna, bibendum ut leo quis, gravida venenatis mi. Cras in neque auctor nisl aliquet dignissim sit amet et felis. Fusce posuere nisl sed lectus viverra, vel dictum risus bibendum. Curabitur ac velit placerat, condimentum nisl vulputate, mollis quam. Donec nec justo justo. Sed sit amet dolor sed massa placerat ultrices aliquet rutrum massa. Mauris rutrum dolor ac turpis imperdiet, vitae faucibus eros malesuada. Nullam eget enim enim. Mauris vitae pellentesque turpis. Nulla iaculis, dui eget elementum porttitor, magna augue aliquet massa, at fermentum magna ligula eget tellus. Nam vestibulum massa non magna convallis facilisis. Suspendisse rhoncus rutrum ligula, eu lobortis augue porta id. Maecenas consequat neque eget erat semper, eget pellentesque velit mollis. Aliquam vitae aliquam ipsum, ut dictum dolor. Nam vitae dictum arcu. Curabitur id congue nunc.',
                'user_id'  => 12,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/rural/old-windmill-gaff67e468_1280.jpg',
                'description' => 'Donec eget aliquet turpis. Suspendisse maximus felis in turpis bibendum, eget ornare arcu vehicula. Mauris viverra, quam eget suscipit tempus, justo turpis auctor lacus, nec blandit mi sapien at nisl. Pellentesque facilisis tempus porttitor. Nunc scelerisque urna augue, ut semper odio mattis ut. Quisque aliquam nulla tortor, sit amet dignissim lectus pretium eu. Fusce tempus placerat tortor in egestas.',
                'user_id'  => 7,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/rural/road-g7d63f95ae_1280.jpg',
                'description' => 'Etiam nec augue in nisi auctor luctus. Praesent euismod massa non viverra imperdiet. Aliquam faucibus felis lacinia mauris faucibus, at placerat urna pretium. Proin blandit accumsan mattis. Phasellus scelerisque erat id ex tristique sollicitudin. Phasellus vel pretium nisi. Quisque a purus a urna vestibulum hendrerit. Etiam viverra purus ac ante viverra, quis lacinia est eleifend.',
                'user_id'  => 12,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
            [
                'url'  => 'url_image/rural/street-g0783604e7_1280.jpg',
                'description' => 'Cras ligula lectus, condimentum a lorem id, venenatis auctor dui. Praesent posuere tristique mi et convallis. Suspendisse potenti. Nullam imperdiet dui id tempus convallis. Sed dapibus consequat quam a aliquet. Morbi ut risus vitae urna faucibus congue sed a nibh. Suspendisse potenti. Nullam ornare dapibus purus, in egestas diam iaculis ut. Curabitur vel lorem augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut hendrerit velit leo, sit amet aliquam sapien accumsan et.',
                'user_id'  => 18,
                'title' => 'Consectetur Adipiscing',
                'subtitle' => 'Cras ornare suscipit libero',
                'created_at' => now()
            ],
        ];

        Publication::insert($publications);
    }
}
