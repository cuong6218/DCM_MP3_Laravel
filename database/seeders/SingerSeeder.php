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
            'description' => '',
        ]);
        DB::table('singers')->insert([
            'id' => 2,
            'singer_name' => 'Phương Ly',
            'image' => 'images/ratrxjPK3fUYSC7K9JcKYAQEKQuir2EsiCXQbBYB.jpeg',
            'description' => 'Phương Ly tham gia các cuộc thi âm nhạc từ sớm, đạt giải nhì nhạc nhẹ của Sao Mai năm 2005, lọt vào top 30 cuộc thi Vietnam Idol 2007 sau đó là bán kết 3 của Vietnam Idol 2010. Cô được đông đảo khán giả yêu thích nhưng bất ngờ biến mất khỏi showbiz Việt.
Đầu năm 2015, Phương Ly xuất hiện trở lại. Cô đầu quân công ty OnOn Entertainment rồi ra mắt ca khúc "Crush On You" vào năm 2016.
Năm 2017, sự kết hợp giữa Phương Ly và JustaTee trong "Mặt Trời Của Em" đạt thành công lớn, năm 2018 ca khúc "Thằng Điên" của bộ đôi cũng giành nhiều giải thưởng.
Cái tên Phương Ly trở nên nổi tiếng trong làng V-pop, cô liên tiếp có các ca khúc hit như "Anh Là Ai" hay "Đâu Chịu Ngồi Yên" (cùng Rhymastic và Touliver) trong năm 2019.',
        ]);
        DB::table('singers')->insert([
            'id' => 3,
            'singer_name' => 'Jack',
            'image' => 'images/WqcMvCizY6wbTkCoJMDLaChpNWrAx2OUKcchlHUz.jpeg',
            'description' => 'Với niềm đam mê ca hát, Jack từ bỏ con đường sư phạm và gia nhập nhóm hiphop G5R.
Năm 2019, Jack ra mắt ca khúc "Hồng Nhan". Bài hát nhanh chóng trở thành một hiện tượng trong giới trẻ Việt Nam.
Thừa thắng xông lên, Jack kết hợp cùng K-ICM ra mắt "Bạc Phận", và cũng như trước đó, hài hát nhanh chóng dẫn đầu các bảng xếp hạng âm nhạc trong nước.
Cũng trong thời gian này, Jack quyết định đầu quân về công ty ICM, chung một nhà với K-ICM. Bộ đôi liên tiếp ra mắt những ca khúc "khủng" như: "Sóng Gió", "Em Gì Ơi"...
Cuối năm 2019, sau những lùm xùm với K-ICM và công ty quản lý, Jack rời khỏi ICM.
Đầu năm 2020, Jack ra mắt ca khúc "Là Một Thằng Con Trai" đánh dấu điểm khởi đầu cho sự nghiệp solo của anh.',
        ]);
        DB::table('singers')->insert([
            'id' => 4,
            'singer_name' => 'Hương Tràm',
            'image' => 'images/NIFoqlZgsTT5foYO4iImeowVqq7w4wmSiIuY0JMP.jpeg',
            'description' => 'Hương Tràm đã gây cơn sốt trong buổi lên sóng đầu tiên ở vòng Giấu Mặt của The Voice 2012 khi cô chọn ca khúc kinh điển I Will Always Love You của Whitney Houston và đã được cả 4 vị huấn luyện viên xoay ghế chọn vào đội của mình. Tuy nhiên, Hương Tràm quyết định chọn ca sỹ Thu Minh là vị huấn luyện viên cho giọng ca của mình.',
        ]);
        DB::table('singers')->insert([
            'id' => 5,
            'singer_name' => 'Hà Anh Tuấn',
            'image' => 'images/CpuaXHacOvOjT86Z6n26xqXTMn5XYh57xgJn3qyK.jpeg',
            'description' => 'Năm 2006, Hà Anh Tuấn tham gia cuộc thi Sao Mai Điểm Hẹn và vào được top 3 chung cuộc.
Sau cuộc thi, anh chọn dòng nhạc R&B để theo đuổi với album đầu tay "Cafe Sáng" (2007) sau đó là "Saigon Radio" (2009),... mang lại cho anh nhiều giải thưởng.
Ngoài R&B, anh còn thành công ở thể loại Pop với nhiều ca khúc được khán giả yêu thích, nổi bật là những bản tình ca song ca cùng Phương Linh trong album "Ngày Hát Đôi" (2007) hay "Anh Yêu Em" (2011)
Một trong những thành công lớn của Hà Anh Tuấn là những chương trình âm nhạc đầy tính nghệ thuật, có thể kể đến liveshow "Fragile" (2017), chuỗi liveshow "See Sing Share" (2018) và live concert "Truyện Ngắn" (2019).',
        ]);
        DB::table('singers')->insert([
            'id' => 6,
            'singer_name' => 'Đức Phúc',
            'image' => 'images/2TYIV3iWpU1QEGGyKitPYQKd9Q16XXlbavbdNUfB.jpeg',
            'description' => 'Đức Phúc đã trở lại với một ca khúc siêu ngọt ngào cho mùa Valentine này. Hơn Cả Yêu sẽ khiến các bạn tan chảy với giai điệu và lời bài hát chỉ cần nghe xong là muốn yêu ngay. Cùng Zing MP3 thưởng thức ngay nào!',
        ]);
        DB::table('singers')->insert([
            'id' => 7,
            'singer_name' => 'ERIK',
            'image' => 'images/jmCOg6oeidBGR8kGulHrkzF93wCP3EdeB0PQvZY6.jpeg',
            'description' => 'ERIK tham gia Giọng Hát Việt Nhí năm 2013 và dừng lại ở vị trí top 15.
Năm 2014, anh tham gia cuộc thi của St.319 Entertainment và trở thành thực tập sinh.
Năm 2016, ERIK debut với ca khúc Pop ballad "Sau Tất Cả". Ca khúc nhanh chóng trở thành cơn sốt đối với giới trẻ.
Năm 2017, ERIK rời công ty. Anh kết hợp với MIN trong ca khúc "Ghen". Bài hát là bước tiến nổi bật trong sự nghiệp ca hát của anh.
Từ 2018 đến nay, ERIK đều đặn ra mắt các bản hit: "Chạm Đáy Nỗi Đau" (2018), "Đừng Có Mơ" (2018), "Anh Ta Là Sao" (2019), "Có Tất Cả Nhưng Thiếu Anh" (2019)...
Đầu năm 2020, phiên bản mới của "Ghen" là "Ghen Cô Vy" ra mắt trong thời điểm dịch COVID-19 được đón nhận, không chỉ trong nước mà cả trên thế giới.',
        ]);
        DB::table('singers')->insert([
            'id' => 8,
            'singer_name' => 'BlackPink',
            'image' => 'images/TBIUcWY2oDt2CuDUbQ3YAgNIPzvfQD5DN71bSgK1.jpeg',
            'description' => 'BLACKPINK (Hangul: 블랙핑크; Romaja quốc ngữ: Beullaek Pingkeu, thường được viết cách điệu thành BLACK PINK, BLACKPINK hay BLΛƆKPIИK)

Vào ngày 29/06/2016, YG Entertainment đã chính thức tiết lộ girlgroup mới của họ sẽ chỉ gồm bốn thành viên đã công bố từ trước, đồng thời nhóm sẽ có tên là Black Pink.

Đại diện YG Entertainment cho biết: "Ý nghĩa của tên gọi Black Pink là để phản bác lại cách nhìn nhận phổ biến về màu hồng. Hồng thường được sử dụng để thể hiện vẻ xinh đẹp nhưng BLACKPINK mang ý nghĩa "Xinh đẹp không phải là tất cả". Nó còn mang nghĩa biểu tượng rằng họ là một nhóm không chỉ sở hữu ngoại hình xinh đẹp mà còn cực kỳ tài năng và cá tính".

Nhóm được thành lập vào năm 2016 và quản lý bởi công ty YG Entertainment bao gồm 4 thành viên: Jisoo sinh ngày 03/01/1995.
Jennie sinh ngày 16/01/1996.
Rosé sinh ngày 11/02/1997.
Lisa sinh ngày 27/03/1997.
YG thông báo rằng Black Pink sẽ không có trưởng nhóm vì công ty muốn cả bốn thành viên cùng hỗ trợ lẫn nhau.

Nhóm chính thức ra mắt vào lúc 8:00PM (KST) ngày 08/08/2016 với hai đĩa đơn "BOOMBAYAH" và "Whistle", nằm trong album đĩa đơn đầu tay "SQUARE ONE". Black Pink lập kỉ lục là nhóm nhạc nữ được đề cử và giành chiến thắng trên các show âm nhạc nhanh nhất kể từ khi ra mắt và bắt đầu quảng bá. Nhóm được no.1 trên Inkigayo chỉ sau 13 ngày debut.

Trước khi ra mắt: Ngày 01/06/2016, YG Entertainment bắt đầu giới thiệu hình ảnh teaser cho sự ra mắt của nhóm nhạc nữ mới, thành viên đầu tiên được tiết lộ là Jennie Kim, thực tập sinh khá nổi tiếng của YG, người trước đây đã hợp tác với các nghệ sĩ cùng công ty, trong đó có G-Dragon qua ca khúc "Black" (2012).

Ngày 08/06, hình ảnh của thành viên Lisa, một cô nàng bí ẩn gây nhiều ấn tượng với những video được đăng tải trên kênh Youtube của công ty. Lisa là thành viên ngoại quốc đầu tiên trong lịch sử nhà YG và được biết đến là người duy nhất dành chiến thắng trong cuộc thi YG Audition tại Thái Lan vào năm 2010.

Ngày 15/06, YG tiết lộ hình ảnh của thành viên Jisoo, thành viên lớn tuổi nhất, là người mẫu cho nhiều nhãn hiệu quảng cáo và diễn xuất trong nhiều video âm nhạc.
Ngày 22/06, tiết lộ thành viên cuối cùng: Rosé. Người đã từng góp giọng trong ca khúc "Without You" (2012) của G-Dragon.
Cuối cùng, vào ngày 29/06, YG Entertainment cho ra mắt những hình ảnh teaser của cả bốn thành viên đã tiết lộ trước đó và xác nhận nhóm sẽ mang tên BLACKPINK.
Ngày 15/01/2017, Black Pink tiết lộ BLINK sẽ là tên fanclub chính thức của nhóm bằng một hình ảnh đăng tải lên Instagram. YG giải thích rằng họ đã lấy “BL” trong Black và “INK” trong “pink” để hợp thành từ Blink (nhấp nháy), mang ý nghĩa là cách mà Black Pink nhìn thấy người hâm mộ của họ.
Sáng ngày 17/05, YGEX Entertainment (công ty hợp tác giữa YG và AVEX, chuyên phụ trách hoạt động của nghệ sĩ YG tại Nhật) đã thông báo rằng nhóm nhạc nữ Black Pink sẽ ra mắt tại thị trường Nhật Bản vào tháng 07. Để quảng bá cho nhóm, kể từ ngày 17/05, YVEX đã đăng tải hồ sơ của 4 thành viên Jennie, Jisoo, Rosé và Lisa lên website chính thức.',
        ]);
        DB::table('singers')->insert([
            'id' => 9,
            'singer_name' => 'Noo Phước Thịnh',
            'image' => 'images/3f6c8FZIq9fgfIQQLTDYscNyw2OW08ZUqrIqFlEg.jpeg',
            'description' => 'Ca khúc “Xin Đừng Buông Tay” một lần nữa được Noo Phước Thịnh thể hiện lại với giọng ca ngọt ngào và tình cảm sẽ làm các fan đừng ngồi không yên đây!
Bấm ngay vào Zing MP3 để thưởng thức giọng ca của Noo Phước Thịnh với ca khúc “Xin Đừng Buông Tay” thôi nào!',
        ]);
    }
}
