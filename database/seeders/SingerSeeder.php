<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('singers')->insert([
            'id' => 1,
            'singer_name' => 'Unknown',
            'image' => 'images/user-default.png',
            'description' => 'Nhiều ca sĩ',
        ]);
        DB::table('singers')->insert([
            'id' => 2,
            'singer_name' => 'AMEE',
            'image' => 'images/aCtNsErT3I6aGBJmhKnhTN68TgKAgbksoptEVKz5.jpeg',
            'description' => 'Album “dreAMEE” là album đánh dấu hành trình một năm ra mắt của tân binh AMEE. Cùng với hình tượng công chúa 4 mùa Xuân – Hạ - Thu - Đông, âm nhạc mà AMEE đưa vào album là năng lượng tích cực trong tình yêu gửi đến các fan của cô nàng\r\nCùng thưởng thức những dư vị ngọt ngào đến từ album dreAMEE nhé.',
        ]);
        DB::table('singers')->insert([
            'id' => 3,
            'singer_name' => 'DJ Mie',
            'image' => 'images/9rMFpi2e5PClJ0CWx4RoQkiyAJ13fK4efsoVM9Ep.jpeg',
            'description' => '',
        ]);
        DB::table('singers')->insert([
            'id' => 4,
            'singer_name' => 'Đức Phúc',
            'image' => 'images/lsIvk3HNJnkajYW5ayNkh2JgcsQXhszgnmvCbTSA.jpeg',
            'description' => 'Năm 2015 anh tham gia cuộc thi Giọng hát Việt. Trước khi tham gia Giọng hát Việt anh cũng đã từng tham gia hai cuộc thi khác đó là Vietnam Idol và Vietnam\'s Got Talent nhưng đều bị loại ở ngay vòng đầu. Sau 6 tháng tham gia cuộc thi dưới sự đẫn dắt của Mỹ Tâm vào ngày 20/09/2015 anh chính thức trở thành quán quân nam đầu tiên của Giọng hát Việt với tỷ lệ tin nhắn bình chọn áp đảo 49.25%.\r\nSau hơn 2 tháng kể từ khi đăng quang ngôi vị Quán quân chương trình The Voice, Đức Phúc chính thức giới thiệu đến công chúng và khán giả yêu âm nhạc sản phẩm đầu tay của mình, MV “Chỉ Một Câu”. MV được sự hỗ trợ thực hiện từ Công ty MT Entertainment của ca sĩ Mỹ Tâm. Đây có thể xem là việc làm nhằm hiện thực hóa lời hứa sẽ đồng hành, hỗ trợ cậu học trò nhỏ mà “Họa mi tóc nâu” từng hứa trong cuộc thi The Voice. Không quá bất ngờ nhưng điều này cũng tạo ra nhiều thú vị bởi từ trước đến nay Mỹ Tâm gần như chưa bao giờ chính thức nhận lời hỗ trợ “toàn tập” cho bất kỳ ca sĩ trẻ nào.',
        ]);
        DB::table('singers')->insert([
            'id' => 5,
            'singer_name' => 'ERIK',
            'image' => 'images/YvReYL4cM5ajPhAhImVlO803mxE0smIiKFocqsQ6.jpeg',
            'description' => 'ERIK tham gia Giọng Hát Việt Nhí năm 2013 và dừng lại ở vị trí top 15.\r\nNăm 2014, anh tham gia cuộc thi của St.319 Entertainment và trở thành thực tập sinh.\r\nNăm 2016, ERIK debut với ca khúc Pop ballad \"Sau Tất Cả\". Ca khúc nhanh chóng trở thành cơn sốt đối với giới trẻ.\r\nNăm 2017, ERIK rời công ty. Anh kết hợp với MIN trong ca khúc \"Ghen\". Bài hát là bước tiến nổi bật trong sự nghiệp ca hát của anh.\r\nTừ 2018 đến nay, ERIK đều đặn ra mắt các bản hit: \"Chạm Đáy Nỗi Đau\" (2018), \"Đừng Có Mơ\" (2018), \"Anh Ta Là Sao\" (2019), \"Có Tất Cả Nhưng Thiếu Anh\" (2019)...\r\nĐầu năm 2020, phiên bản mới của \"Ghen\" là \"Ghen Cô Vy\" ra mắt trong thời điểm dịch COVID-19 được đón nhận, không chỉ trong nước mà cả trên thế giới.',
        ]);
        DB::table('singers')->insert([
            'id' => 6,
            'singer_name' => 'Hà Anh Tuấn',
            'image' => 'images/SFwUiagZe8rWMrgHY4eNUS1JSyinqLPGQYAEUswI.jpeg',
            'description' => 'Năm 2006, Hà Anh Tuấn tham gia cuộc thi Sao Mai Điểm Hẹn và vào được top 3 chung cuộc.\r\nSau cuộc thi, anh chọn dòng nhạc R&B để theo đuổi với album đầu tay \"Cafe Sáng\" (2007) sau đó là \"Saigon Radio\" (2009), \"Acous\'84\" (2010), \"Lava\" (2014), \"Street Rhythm\" (2015)... mang lại cho anh nhiều giải thưởng.\r\nNgoài R&B, anh còn thành công ở thể loại Pop với nhiều ca khúc được khán giả yêu thích, nổi bật là những bản tình ca song ca cùng Phương Linh trong album \"Ngày Hát Đôi\" (2007) hay \"Anh Yêu Em\" (2011)\r\nMột trong những thành công lớn của Hà Anh Tuấn là những chương trình âm nhạc đầy tính nghệ thuật, có thể kể đến liveshow \"Fragile\" (2017), chuỗi liveshow \"See Sing Share\" (2018) và live concert \"Truyện Ngắn\" (2019).',
        ]);
        DB::table('singers')->insert([
            'id' => 7,
            'singer_name' => 'Jack',
            'image' => 'images/NzTVU5OYmh4b1jSzpHNGK8whlxZ7rCEODrl32GPX.jpeg',
            'description' => 'Với niềm đam mê ca hát, Jack từ bỏ con đường sư phạm và gia nhập nhóm hiphop G5R.\r\nNăm 2019, Jack ra mắt ca khúc \"Hồng Nhan\". Bài hát nhanh chóng trở thành một hiện tượng trong giới trẻ Việt Nam.\r\nThừa thắng xông lên, Jack kết hợp cùng K-ICM ra mắt \"Bạc Phận\", và cũng như trước đó, hài hát nhanh chóng dẫn đầu các bảng xếp hạng âm nhạc trong nước.\r\nCũng trong thời gian này, Jack quyết định đầu quân về công ty ICM, chung một nhà với K-ICM. Bộ đôi liên tiếp ra mắt những ca khúc \"khủng\" như: \"Sóng Gió\", \"Em Gì Ơi\"...\r\nCuối năm 2019, sau những lùm xùm với K-ICM và công ty quản lý, Jack rời khỏi ICM.\r\nĐầu năm 2020, Jack ra mắt ca khúc \"Là Một Thằng Con Trai\" đánh dấu điểm khởi đầu cho sự nghiệp solo của anh.',
        ]);
        DB::table('singers')->insert([
            'id' => 8,
            'singer_name' => 'JustaTee',
            'image' => 'images/mIWc94P5dVX4aWWKTbUEDfVkQH5n3wBfsJTWXCqp.jpeg',
            'description' => 'JustaTee sáng tác từ năm 2004.\r\nTừ 2005 đến 2008 anh là ca sĩ, rapper và nhà sản xuất âm nhạc trong nhóm rap Click Click Boom.\r\nTháng 8 2010, anh ra mắt mini album đầu tiên \"JUST-A-TEE\" đánh dấu tên tuổi trong nền nhạc R&B của nước nhà.\r\nNăm 2013, JustaTee góp giọng vào \"Thời Gian Sẽ Trả Lời\" của Tiên Cookie cùng với BigDaddy, ca khúc trở thành bài hit đình đám năm đó.\r\nNăm 2016, anh tiếp tục tái ngộ với BigDaddy trong ca khúc \"Về Nhà Ăn Tết\" và single \"Dù anh có đứng lại\".\r\nVề sau, JustaTee rất có duyên khi kết hợp với các nữ ca sĩ: với Phương Ly trong \"Mặt Trời Của Em\" và \"Thằng Điên\", với MIN trong \"Vì Yêu Cứ Đâm Đầu\", Tiên Tiên trong \"Cần Gì Hơn\"... tất cả đều trở thành bản hit được đông đảo khán giả đón nhận.',
        ]);
        DB::table('singers')->insert([
            'id' => 9,
            'singer_name' => 'MIN',
            'image' => 'images/rSRYrY8xBGgSe3uwL3opUmKowoWPBjdk6cZg7O4K.jpeg',
            'description' => 'MIN đã có một bước đột phá mới trong sự nghiệp nghệ thuật, khi giới thiệu tới báo giới và người yêu nhạc ca khúc TÌM như một khởi đầu tốt đẹp cho con đường ca hát chuyên nghiệp.\r\n\r\nTÌM là một trong những ca khúc được tìm nghe nhiều nhất trên mạng xã hội, trong tháng 12/2013, và cũng là sản phẩm mở đường, giúp Min thêm nhiều cơ hội hợp tác cùng các nghệ sĩ trẻ khác.\r\n\r\nVới giọng hát tình cảm ngọt ngào và cá tính, có thể nói rằng, Min như một cơn gió lạ, một hình tượng mới của giới nghệ thuật Việt Nam, đang từng bước khẳng định được chính mình với sự ủng hộ của thế hệ trẻ.\r\n\r\n2017 phát hành các singles như Ghen, Chưa Bao Giờ Mẹ Kể, Có Em Chờ......',
        ]);
        DB::table('singers')->insert([
            'id' => 10,
            'singer_name' => 'Minh Vương M4U',
            'image' => 'images/4WXngCyDZPPUV5XtYWeuc7eWZuY3EZd80JAV5F7I.jpeg',
            'description' => 'Năm 2007, Minh Vương tham gia nhóm M4U từ những ngày đầu thành lập.\r\nSau khi nhóm M4U tan rã, Minh Vương trở thành ca sĩ solo, anh lấy nghệ danh Minh Vương M4U để hoạt động. Vào năm 2008, Minh Vương M4U sáng tác và trình bày ca khúc \"Mưa\", sau đó là \"Nhớ Em\" vào năm 2010.\r\nCuối năm 2011, ca khúc \"Nỗi Đau Xót Xa\" của anh trở thành hit được yêu thích, đánh dấu sự thăng hoa trong sự nghiệp.\r\nCác năm sau đó anh đều đặn ra sản phẩm mới, nổi bật có \"Anh Nhớ Em Người Yêu Cũ\", \"Em Ơi Lên Phố\" hay \"Em Sẽ Là Cô Dâu\". Đặc biệt sự kết hợp giữa anh và Hương Ly trong \"Nắm\" và \"Thê Tử\" vào năm 2019 đạt được nhiều thành công.\r\nĐầu năm 2020, Minh Vương M4U trở lại với ca khúc \"Trúc Xinh\" (cùng Việt, ACV\" và \"Cuộc Sống Xa Nhà\".',
        ]);
        DB::table('singers')->insert([
            'id' => 11,
            'singer_name' => 'Phan Mạnh Quỳnh',
            'image' => 'images/QMnTVDlWjBchhtbVVOuWJXsabtQezWpDJIGecs87.jpeg',
            'description' => 'Tháng 9 năm 2015, Phan Mạnh Quỳnh phát hành album Vợ người ta và thành công lớn với ca khúc chủ đề cùng tên đã trở thành một hiện tượng trong năm 2015. Ca khúc Vợ người ta đã lập kỷ lục đạt 6 triệu lượt nghe chỉ sau 2 tuần phát hành (chỉ tính riêng trên một trang nhạc trực tuyến), đứng Top 5 cho ba hạng mục giải thưởng của Zing Music Awards: Ca khúc của năm, Album của năm và Music Video của năm. Tính đến tháng 12 năm 2015, Vợ người ta đã cán mốc 100 triệu lượt nghe và 32 triệu lượt xem trên kênh âm nhạc trực tuyến. Ca khúc Vợ người ta được ca sĩ trình bày lại trong tập 7, chương trình Hội ngộ danh hài năm 2016.\r\nNăm 2016, Phan Mạnh Quỳnh đã sáng tác và biểu diễn bài hát mới Hồi Ức trong chương trình Sing My Song (Bài Hát Hay Nhất) Tập 7.',
        ]);
        DB::table('singers')->insert([
            'id' => 12,
            'singer_name' => 'Phương Ly',
            'image' => 'images/IQhSkGJ1rCwooG0AEOYcTJfgru0AkEK7gzvgPSPD.jpeg',
            'description' => 'Phương Ly tham gia các cuộc thi âm nhạc từ sớm, đạt giải nhì nhạc nhẹ của Sao Mai năm 2005, lọt vào top 30 cuộc thi Vietnam Idol 2007 sau đó là bán kết 3 của Vietnam Idol 2010. Cô được đông đảo khán giả yêu thích nhưng bất ngờ biến mất khỏi showbiz Việt.\r\nĐầu năm 2015, Phương Ly xuất hiện trở lại. Cô đầu quân công ty OnOn Entertainment rồi ra mắt ca khúc \"Crush On You\" vào năm 2016.\r\nNăm 2017, sự kết hợp giữa Phương Ly và JustaTee trong \"Mặt Trời Của Em\" đạt thành công lớn, năm 2018 ca khúc \"Thằng Điên\" của bộ đôi cũng giành nhiều giải thưởng.\r\nCái tên Phương Ly trở nên nổi tiếng trong làng V-pop, cô liên tiếp có các ca khúc hit như \"Anh Là Ai\" hay \"Đâu Chịu Ngồi Yên\" (cùng Rhymastic và Touliver) trong năm 2019.',
        ]);
        DB::table('singers')->insert([
            'id' => 13,
            'singer_name' => 'Quang Lê',
            'image' => 'images/ruOchpzDkth7ajXODwNMWuAAKpJArq2UTrkoQCu8.jpeg',
            'description' => 'Quang Lê sinh ra tại Huế, trong gia đình gồm 6 anh em và một người chị nuôi, Quang Lê là con thứ 3 trong gia đình. Đầu những năm 1990, Quang Lê theo gia đình sang định cư tại bang Missouri, Mỹ. Hoạt động ca hát ở các sân khấu hải ngoại, anh tạo nên ấn tượng sâu sắc với khán giả qua dáng vẻ thư sinh cùng giọng hát trầm ấm và giàu tình cảm đậm chất Huế. Anh liên tiếp được trung tâm phát hành liên tiếp các album và đều tạo được tiếng vang lớn. Năm 2010 đến nay, Quang Lê thường xuyên',
        ]);
        DB::table('singers')->insert([
            'id' => 14,
            'singer_name' => 'Sơn Tùng M-TP',
            'image' => 'images/6aClcSxIgWRc29jGZeoe7PEFSaiYq3BmIlE876GQ.jpeg',
            'description' => 'Với Em Của Ngày Hôm Qua, ca khúc này đã trở thành một bài hit lớn trong sự nghiệp của Sơn Tùng M-TP khi ca khúc này liên tiếp chiếm giữ vị trí số 1 tại bảng xếp hạng của Zing Mp3 ở cả hai hạng mục là Bài hát và Video clip. 08/09/2014, MV Em Của Ngày Hôm Qua chính thức đạt hơn 40 triệu lượt xem trên Youtube trong vòng 9 tháng. Đây là một con số kỷ lục đối với MV nhạc Việt tình cho thời điểm bấy giờ. Dù gặp phải rất nhiều ý kiến xung quanh việc đạo nhạc nhưng không thể phủ nhận sức nóng của những ca khúc mà Sơn Tùng biểu diễn kể từ Nắng Ấm Xa Dần, Cơn Mưa Ngang Qua',
        ]);
        DB::table('singers')->insert([
            'id' => 15,
            'singer_name' => 'Hari Won',
            'image' => 'images/qscOlS5UkbzRF8xDo8shYeRZ4AUb6GYyaXI1thyp.jpeg',
            'description' => 'Hari Won sinh ra và lớn lên ở Hàn Quốc. Cô từng tham gia nhóm nhạc Hàn Quốc thành lập năm 2001 có tên Kiss.\r\nCô được khán giả Việt Nam biết đến sau cuộc thi \"Cuộc Đua Kỳ Thú\" năm 2013.\r\nNăm 2014, cô ra mắt ca khúc \"Hoa Tuyết\", \"Hương Đêm Bay Xa\", đặc biệt ca khúc \"Hương Đêm Bay Xa\" được nhiều người yêu thích.\r\nNối tiếp thành công, các năm sau cô liên tiếp ra mắt các ca khúc mới như \"Khóc\", \"Lời Tỏ Tình\"... trong năm 2015, \"Làm Sao Để Yêu\", \"Anh Cứ Đi Đi\"... trong năm 2016. Ca khúc \"Anh Cứ Đi Đi\" giữ vị trí đầu các bảng xếp hạng âm nhạc và mang lại cho cô nhiều giải thưởng.\r\nTừ 2016 đến nay, Hari Won vẫn chăm chỉ hoạt động âm nhạc, ngoài ra cô còn hoạt động tích cực với vai trò diễn viên và người dẫn chương trình.',
        ]);
        DB::table('singers')->insert([
            'id' => 16,
            'singer_name' => 'Hương Tràm',
            'image' => 'images/OHTZoKe2H4IQqkxvrCipiXC5CSIZSL8XIKRk7dBo.jpeg',
            'description' => 'Hương Tràm đã gây cơn sốt trong buổi lên sóng đầu tiên ở vòng Giấu Mặt của The Voice 2012 khi cô chọn ca khúc kinh điển I Will Always Love You của Whitney Houston và đã được cả 4 vị huấn luyện viên xoay ghế chọn vào đội của mình. Tuy nhiên, Hương Tràm quyết định chọn ca sỹ Thu Minh là vị huấn luyện viên cho giọng ca của mình.',
        ]);
        DB::table('singers')->insert([
            'id' => 17,
            'singer_name' => 'Black Pink',
            'image' => 'images/Mmvl0kNoyEJDH09Gh3W3vW1El1Ig3s4UhnvwZWQf.jpeg',
            'description' => 'BLACKPINK (Hangul: 블랙핑크; Romaja quốc ngữ: Beullaek Pingkeu, thường được viết cách điệu thành BLACK PINK, BLACKPINK hay BLΛƆKPIИK).\r\nNhóm chính thức ra mắt vào lúc 8:00PM (KST) ngày 08/08/2016 với hai đĩa đơn \"BOOMBAYAH\" và \"Whistle\", nằm trong album đĩa đơn đầu tay \"SQUARE ONE\". Black Pink lập kỉ lục là nhóm nhạc nữ được đề cử và giành chiến thắng trên các show âm nhạc nhanh nhất kể từ khi ra mắt và bắt đầu quảng bá. Nhóm được no.1 trên Inkigayo chỉ sau 13 ngày debut.',
        ]);
    }
}
