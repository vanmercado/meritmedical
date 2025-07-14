jQuery(function() {
  //Search for optgroup- items
  var foundin = $('option:contains("optgroup-")');
  $.each(foundin, function(value) {
    var updated = $(this).val().replace("optgroup-", "");
    var replaced = $(this).replaceWith('<optgroup label="' + updated + '">');
  });
  var foundin2 = $('option:contains("endoptgroup")');
  $.each(foundin2, function(value) {
    var replaced = $(this).replaceWith('</optgroup>');
  });
});

function sendToSalesforce() {
  jQuery('form.salesforce-form').submit();
}
jQuery(function() {
  jQuery('[name=state]').change(function() {
    jQuery('[name=city]').children().remove();
    for (var i = 0; i < amd_address_code.length; i++) {
      if (amd_address_code[i].city.indexOf(jQuery('[name=state]').val()) === 0) {
        jQuery('[name=city]').append(jQuery('<option/>').val(amd_address_code[i].code).text(amd_address_code[i].city));
      }
    }
    if (jQuery('[name=city]').children().length > 1) {
      jQuery('[name=city]').prepend(jQuery('<option value=""></option>'));
    }
    jQuery('[name=city]').children(':first').prop('selected', true);
  });
  var amd_address_code = [];
  amd_address_code.push({
    code: 10,
    city: '北海道'
  });
  amd_address_code.push({
    code: 11,
    city: '北海道阿寒郡'
  });
  amd_address_code.push({
    code: 12,
    city: '北海道旭川市'
  });
  amd_address_code.push({
    code: 13,
    city: '北海道芦別市'
  });
  amd_address_code.push({
    code: 14,
    city: '北海道虻田郡'
  });
  amd_address_code.push({
    code: 15,
    city: '北海道伊達市'
  });
  amd_address_code.push({
    code: 16,
    city: '北海道磯谷郡'
  });
  amd_address_code.push({
    code: 17,
    city: '北海道雨竜郡'
  });
  amd_address_code.push({
    code: 18,
    city: '北海道浦河郡'
  });
  amd_address_code.push({
    code: 19,
    city: '北海道奥尻郡'
  });
  amd_address_code.push({
    code: 20,
    city: '青森県'
  });
  amd_address_code.push({
    code: 21,
    city: '青森県つがる市'
  });
  amd_address_code.push({
    code: 22,
    city: '青森県むつ市'
  });
  amd_address_code.push({
    code: 23,
    city: '青森県下北郡'
  });
  amd_address_code.push({
    code: 24,
    city: '青森県五所川原市'
  });
  amd_address_code.push({
    code: 25,
    city: '青森県弘前市'
  });
  amd_address_code.push({
    code: 26,
    city: '青森県黒石市'
  });
  amd_address_code.push({
    code: 27,
    city: '青森県三戸郡'
  });
  amd_address_code.push({
    code: 28,
    city: '青森県三沢市'
  });
  amd_address_code.push({
    code: 29,
    city: '青森県十和田市'
  });
  amd_address_code.push({
    code: 30,
    city: '岩手県'
  });
  amd_address_code.push({
    code: 31,
    city: '岩手県一関市'
  });
  amd_address_code.push({
    code: 32,
    city: '岩手県遠野市'
  });
  amd_address_code.push({
    code: 33,
    city: '岩手県奥州市'
  });
  amd_address_code.push({
    code: 34,
    city: '岩手県下閉伊郡'
  });
  amd_address_code.push({
    code: 35,
    city: '岩手県花巻市'
  });
  amd_address_code.push({
    code: 36,
    city: '岩手県釜石市'
  });
  amd_address_code.push({
    code: 37,
    city: '岩手県岩手郡'
  });
  amd_address_code.push({
    code: 38,
    city: '岩手県気仙郡'
  });
  amd_address_code.push({
    code: 39,
    city: '岩手県久慈市'
  });
  amd_address_code.push({
    code: 40,
    city: '宮城県'
  });
  amd_address_code.push({
    code: 41,
    city: '宮城県伊具郡'
  });
  amd_address_code.push({
    code: 42,
    city: '宮城県遠田郡'
  });
  amd_address_code.push({
    code: 43,
    city: '宮城県塩竈市'
  });
  amd_address_code.push({
    code: 44,
    city: '宮城県牡鹿郡'
  });
  amd_address_code.push({
    code: 45,
    city: '宮城県加美郡'
  });
  amd_address_code.push({
    code: 46,
    city: '宮城県角田市'
  });
  amd_address_code.push({
    code: 47,
    city: '宮城県刈田郡'
  });
  amd_address_code.push({
    code: 48,
    city: '宮城県岩沼市'
  });
  amd_address_code.push({
    code: 49,
    city: '宮城県気仙沼市'
  });
  amd_address_code.push({
    code: 50,
    city: '秋田県'
  });
  amd_address_code.push({
    code: 51,
    city: '秋田県にかほ市'
  });
  amd_address_code.push({
    code: 52,
    city: '秋田県横手市'
  });
  amd_address_code.push({
    code: 53,
    city: '秋田県潟上市'
  });
  amd_address_code.push({
    code: 54,
    city: '秋田県山本郡'
  });
  amd_address_code.push({
    code: 55,
    city: '秋田県鹿角郡'
  });
  amd_address_code.push({
    code: 56,
    city: '秋田県鹿角市'
  });
  amd_address_code.push({
    code: 57,
    city: '秋田県秋田市'
  });
  amd_address_code.push({
    code: 58,
    city: '秋田県仙北郡'
  });
  amd_address_code.push({
    code: 59,
    city: '秋田県仙北市'
  });
  amd_address_code.push({
    code: 60,
    city: '山形県'
  });
  amd_address_code.push({
    code: 61,
    city: '山形県寒河江市'
  });
  amd_address_code.push({
    code: 62,
    city: '山形県最上郡'
  });
  amd_address_code.push({
    code: 63,
    city: '山形県山形市'
  });
  amd_address_code.push({
    code: 64,
    city: '山形県酒田市'
  });
  amd_address_code.push({
    code: 65,
    city: '山形県上山市'
  });
  amd_address_code.push({
    code: 66,
    city: '山形県新庄市'
  });
  amd_address_code.push({
    code: 67,
    city: '山形県西村山郡'
  });
  amd_address_code.push({
    code: 68,
    city: '山形県西置賜郡'
  });
  amd_address_code.push({
    code: 69,
    city: '山形県村山市'
  });
  amd_address_code.push({
    code: 70,
    city: '福島県'
  });
  amd_address_code.push({
    code: 71,
    city: '福島県いわき市'
  });
  amd_address_code.push({
    code: 72,
    city: '福島県安達郡'
  });
  amd_address_code.push({
    code: 73,
    city: '福島県伊達郡'
  });
  amd_address_code.push({
    code: 74,
    city: '福島県伊達市'
  });
  amd_address_code.push({
    code: 75,
    city: '福島県河沼郡'
  });
  amd_address_code.push({
    code: 76,
    city: '福島県会津若松市'
  });
  amd_address_code.push({
    code: 77,
    city: '福島県岩瀬郡'
  });
  amd_address_code.push({
    code: 78,
    city: '福島県喜多方市'
  });
  amd_address_code.push({
    code: 79,
    city: '福島県郡山市'
  });
  amd_address_code.push({
    code: 80,
    city: '茨城県'
  });
  amd_address_code.push({
    code: 81,
    city: '茨城県かすみがうら市'
  });
  amd_address_code.push({
    code: 82,
    city: '茨城県つくばみらい市'
  });
  amd_address_code.push({
    code: 83,
    city: '茨城県つくば市'
  });
  amd_address_code.push({
    code: 84,
    city: '茨城県ひたちなか市'
  });
  amd_address_code.push({
    code: 85,
    city: '茨城県稲敷郡'
  });
  amd_address_code.push({
    code: 86,
    city: '茨城県稲敷市'
  });
  amd_address_code.push({
    code: 87,
    city: '茨城県猿島郡'
  });
  amd_address_code.push({
    code: 88,
    city: '茨城県下妻市'
  });
  amd_address_code.push({
    code: 89,
    city: '茨城県笠間市'
  });
  amd_address_code.push({
    code: 90,
    city: '栃木県'
  });
  amd_address_code.push({
    code: 91,
    city: '栃木県さくら市'
  });
  amd_address_code.push({
    code: 92,
    city: '栃木県宇都宮市'
  });
  amd_address_code.push({
    code: 93,
    city: '栃木県塩谷郡'
  });
  amd_address_code.push({
    code: 94,
    city: '栃木県下都賀郡'
  });
  amd_address_code.push({
    code: 95,
    city: '栃木県下野市'
  });
  amd_address_code.push({
    code: 96,
    city: '栃木県河内郡'
  });
  amd_address_code.push({
    code: 97,
    city: '栃木県佐野市'
  });
  amd_address_code.push({
    code: 98,
    city: '栃木県鹿沼市'
  });
  amd_address_code.push({
    code: 99,
    city: '栃木県小山市'
  });
  amd_address_code.push({
    code: 110,
    city: '北海道歌志内市'
  });
  amd_address_code.push({
    code: 111,
    city: '北海道河西郡'
  });
  amd_address_code.push({
    code: 112,
    city: '北海道河東郡'
  });
  amd_address_code.push({
    code: 113,
    city: '北海道樺戸郡'
  });
  amd_address_code.push({
    code: 114,
    city: '北海道茅部郡'
  });
  amd_address_code.push({
    code: 115,
    city: '北海道岩見沢市'
  });
  amd_address_code.push({
    code: 116,
    city: '北海道岩内郡'
  });
  amd_address_code.push({
    code: 117,
    city: '北海道亀田郡'
  });
  amd_address_code.push({
    code: 118,
    city: '北海道久遠郡'
  });
  amd_address_code.push({
    code: 119,
    city: '北海道空知郡'
  });
  amd_address_code.push({
    code: 120,
    city: '北海道釧路郡'
  });
  amd_address_code.push({
    code: 121,
    city: '北海道釧路市'
  });
  amd_address_code.push({
    code: 122,
    city: '北海道恵庭市'
  });
  amd_address_code.push({
    code: 123,
    city: '北海道古宇郡'
  });
  amd_address_code.push({
    code: 124,
    city: '北海道古平郡'
  });
  amd_address_code.push({
    code: 125,
    city: '北海道厚岸郡'
  });
  amd_address_code.push({
    code: 126,
    city: '北海道広尾郡'
  });
  amd_address_code.push({
    code: 127,
    city: '北海道江別市'
  });
  amd_address_code.push({
    code: 128,
    city: '北海道根室市'
  });
  amd_address_code.push({
    code: 129,
    city: '北海道沙流郡'
  });
  amd_address_code.push({
    code: 130,
    city: '北海道砂川市'
  });
  amd_address_code.push({
    code: 131,
    city: '北海道札幌市'
  });
  amd_address_code.push({
    code: 132,
    city: '北海道三笠市'
  });
  amd_address_code.push({
    code: 133,
    city: '北海道山越郡'
  });
  amd_address_code.push({
    code: 134,
    city: '北海道士別市'
  });
  amd_address_code.push({
    code: 135,
    city: '北海道枝幸郡'
  });
  amd_address_code.push({
    code: 136,
    city: '北海道爾志郡'
  });
  amd_address_code.push({
    code: 137,
    city: '北海道室蘭市'
  });
  amd_address_code.push({
    code: 138,
    city: '北海道斜里郡'
  });
  amd_address_code.push({
    code: 139,
    city: '北海道寿都郡'
  });
  amd_address_code.push({
    code: 140,
    city: '北海道宗谷郡'
  });
  amd_address_code.push({
    code: 141,
    city: '北海道十勝郡'
  });
  amd_address_code.push({
    code: 142,
    city: '北海道小樽市'
  });
  amd_address_code.push({
    code: 143,
    city: '北海道松前郡'
  });
  amd_address_code.push({
    code: 144,
    city: '北海道上磯郡'
  });
  amd_address_code.push({
    code: 145,
    city: '北海道上川郡'
  });
  amd_address_code.push({
    code: 146,
    city: '北海道常呂郡'
  });
  amd_address_code.push({
    code: 147,
    city: '北海道新冠郡'
  });
  amd_address_code.push({
    code: 148,
    city: '北海道深川市'
  });
  amd_address_code.push({
    code: 149,
    city: '北海道瀬棚郡'
  });
  amd_address_code.push({
    code: 150,
    city: '北海道石狩郡'
  });
  amd_address_code.push({
    code: 151,
    city: '北海道石狩市'
  });
  amd_address_code.push({
    code: 152,
    city: '北海道積丹郡'
  });
  amd_address_code.push({
    code: 153,
    city: '北海道赤平市'
  });
  amd_address_code.push({
    code: 154,
    city: '北海道千歳市'
  });
  amd_address_code.push({
    code: 155,
    city: '北海道川上郡'
  });
  amd_address_code.push({
    code: 156,
    city: '北海道増毛郡'
  });
  amd_address_code.push({
    code: 157,
    city: '北海道足寄郡'
  });
  amd_address_code.push({
    code: 158,
    city: '北海道帯広市'
  });
  amd_address_code.push({
    code: 159,
    city: '北海道滝川市'
  });
  amd_address_code.push({
    code: 160,
    city: '北海道稚内市'
  });
  amd_address_code.push({
    code: 161,
    city: '北海道中川郡'
  });
  amd_address_code.push({
    code: 162,
    city: '北海道天塩郡'
  });
  amd_address_code.push({
    code: 163,
    city: '北海道登別市'
  });
  amd_address_code.push({
    code: 164,
    city: '北海道島牧郡'
  });
  amd_address_code.push({
    code: 165,
    city: '北海道苫小牧市'
  });
  amd_address_code.push({
    code: 166,
    city: '北海道苫前郡'
  });
  amd_address_code.push({
    code: 167,
    city: '北海道二海郡'
  });
  amd_address_code.push({
    code: 168,
    city: '北海道日高郡'
  });
  amd_address_code.push({
    code: 169,
    city: '北海道白糠郡'
  });
  amd_address_code.push({
    code: 170,
    city: '北海道白老郡'
  });
  amd_address_code.push({
    code: 171,
    city: '北海道函館市'
  });
  amd_address_code.push({
    code: 172,
    city: '北海道美唄市'
  });
  amd_address_code.push({
    code: 173,
    city: '北海道標津郡'
  });
  amd_address_code.push({
    code: 174,
    city: '北海道富良野市'
  });
  amd_address_code.push({
    code: 175,
    city: '北海道北見市'
  });
  amd_address_code.push({
    code: 176,
    city: '北海道北広島市'
  });
  amd_address_code.push({
    code: 177,
    city: '北海道北斗市'
  });
  amd_address_code.push({
    code: 178,
    city: '北海道幌泉郡'
  });
  amd_address_code.push({
    code: 179,
    city: '北海道名寄市'
  });
  amd_address_code.push({
    code: 180,
    city: '北海道網走郡'
  });
  amd_address_code.push({
    code: 181,
    city: '北海道網走市'
  });
  amd_address_code.push({
    code: 182,
    city: '北海道目梨郡'
  });
  amd_address_code.push({
    code: 183,
    city: '北海道紋別郡'
  });
  amd_address_code.push({
    code: 184,
    city: '北海道紋別市'
  });
  amd_address_code.push({
    code: 185,
    city: '北海道野付郡'
  });
  amd_address_code.push({
    code: 186,
    city: '北海道勇払郡'
  });
  amd_address_code.push({
    code: 187,
    city: '北海道有珠郡'
  });
  amd_address_code.push({
    code: 188,
    city: '北海道夕張郡'
  });
  amd_address_code.push({
    code: 189,
    city: '北海道夕張市'
  });
  amd_address_code.push({
    code: 190,
    city: '北海道余市郡'
  });
  amd_address_code.push({
    code: 191,
    city: '北海道様似郡'
  });
  amd_address_code.push({
    code: 192,
    city: '北海道利尻郡'
  });
  amd_address_code.push({
    code: 193,
    city: '北海道留萌郡'
  });
  amd_address_code.push({
    code: 194,
    city: '北海道留萌市'
  });
  amd_address_code.push({
    code: 195,
    city: '北海道礼文郡'
  });
  amd_address_code.push({
    code: 196,
    city: '北海道檜山郡'
  });
  amd_address_code.push({
    code: 210,
    city: '青森県上北郡'
  });
  amd_address_code.push({
    code: 211,
    city: '青森県西津軽郡'
  });
  amd_address_code.push({
    code: 212,
    city: '青森県青森市'
  });
  amd_address_code.push({
    code: 213,
    city: '青森県中津軽郡'
  });
  amd_address_code.push({
    code: 214,
    city: '青森県東津軽郡'
  });
  amd_address_code.push({
    code: 215,
    city: '青森県南津軽郡'
  });
  amd_address_code.push({
    code: 216,
    city: '青森県八戸市'
  });
  amd_address_code.push({
    code: 217,
    city: '青森県平川市'
  });
  amd_address_code.push({
    code: 218,
    city: '青森県北津軽郡'
  });
  amd_address_code.push({
    code: 310,
    city: '岩手県宮古市'
  });
  amd_address_code.push({
    code: 311,
    city: '岩手県九戸郡'
  });
  amd_address_code.push({
    code: 312,
    city: '岩手県紫波郡'
  });
  amd_address_code.push({
    code: 313,
    city: '岩手県上閉伊郡'
  });
  amd_address_code.push({
    code: 314,
    city: '岩手県盛岡市'
  });
  amd_address_code.push({
    code: 315,
    city: '岩手県西磐井郡'
  });
  amd_address_code.push({
    code: 316,
    city: '岩手県大船渡市'
  });
  amd_address_code.push({
    code: 317,
    city: '岩手県胆沢郡'
  });
  amd_address_code.push({
    code: 318,
    city: '岩手県二戸郡'
  });
  amd_address_code.push({
    code: 319,
    city: '岩手県二戸市'
  });
  amd_address_code.push({
    code: 320,
    city: '岩手県八幡平市'
  });
  amd_address_code.push({
    code: 321,
    city: '岩手県北上市'
  });
  amd_address_code.push({
    code: 322,
    city: '岩手県陸前高田市'
  });
  amd_address_code.push({
    code: 323,
    city: '岩手県和賀郡'
  });
  amd_address_code.push({
    code: 410,
    city: '宮城県宮城郡'
  });
  amd_address_code.push({
    code: 411,
    city: '宮城県栗原市'
  });
  amd_address_code.push({
    code: 412,
    city: '宮城県黒川郡'
  });
  amd_address_code.push({
    code: 413,
    city: '宮城県柴田郡'
  });
  amd_address_code.push({
    code: 414,
    city: '宮城県石巻市'
  });
  amd_address_code.push({
    code: 415,
    city: '宮城県仙台市'
  });
  amd_address_code.push({
    code: 416,
    city: '宮城県多賀城市'
  });
  amd_address_code.push({
    code: 417,
    city: '宮城県大崎市'
  });
  amd_address_code.push({
    code: 418,
    city: '宮城県登米市'
  });
  amd_address_code.push({
    code: 419,
    city: '宮城県東松島市'
  });
  amd_address_code.push({
    code: 420,
    city: '宮城県白石市'
  });
  amd_address_code.push({
    code: 421,
    city: '宮城県本吉郡'
  });
  amd_address_code.push({
    code: 422,
    city: '宮城県名取市'
  });
  amd_address_code.push({
    code: 423,
    city: '宮城県亘理郡'
  });
  amd_address_code.push({
    code: 510,
    city: '秋田県大館市'
  });
  amd_address_code.push({
    code: 511,
    city: '秋田県大仙市'
  });
  amd_address_code.push({
    code: 512,
    city: '秋田県男鹿市'
  });
  amd_address_code.push({
    code: 513,
    city: '秋田県湯沢市'
  });
  amd_address_code.push({
    code: 514,
    city: '秋田県南秋田郡'
  });
  amd_address_code.push({
    code: 515,
    city: '秋田県能代市'
  });
  amd_address_code.push({
    code: 516,
    city: '秋田県北秋田郡'
  });
  amd_address_code.push({
    code: 517,
    city: '秋田県北秋田市'
  });
  amd_address_code.push({
    code: 518,
    city: '秋田県由利本荘市'
  });
  amd_address_code.push({
    code: 519,
    city: '秋田県雄勝郡'
  });
  amd_address_code.push({
    code: 610,
    city: '山形県長井市'
  });
  amd_address_code.push({
    code: 611,
    city: '山形県鶴岡市'
  });
  amd_address_code.push({
    code: 612,
    city: '山形県天童市'
  });
  amd_address_code.push({
    code: 613,
    city: '山形県東根市'
  });
  amd_address_code.push({
    code: 614,
    city: '山形県東村山郡'
  });
  amd_address_code.push({
    code: 615,
    city: '山形県東置賜郡'
  });
  amd_address_code.push({
    code: 616,
    city: '山形県東田川郡'
  });
  amd_address_code.push({
    code: 617,
    city: '山形県南陽市'
  });
  amd_address_code.push({
    code: 618,
    city: '山形県尾花沢市'
  });
  amd_address_code.push({
    code: 619,
    city: '山形県米沢市'
  });
  amd_address_code.push({
    code: 620,
    city: '山形県飽海郡'
  });
  amd_address_code.push({
    code: 621,
    city: '山形県北村山郡'
  });
  amd_address_code.push({
    code: 710,
    city: '福島県須賀川市'
  });
  amd_address_code.push({
    code: 711,
    city: '福島県西白河郡'
  });
  amd_address_code.push({
    code: 712,
    city: '福島県石川郡'
  });
  amd_address_code.push({
    code: 713,
    city: '福島県双葉郡'
  });
  amd_address_code.push({
    code: 714,
    city: '福島県相馬郡'
  });
  amd_address_code.push({
    code: 715,
    city: '福島県相馬市'
  });
  amd_address_code.push({
    code: 716,
    city: '福島県大沼郡'
  });
  amd_address_code.push({
    code: 717,
    city: '福島県田村郡'
  });
  amd_address_code.push({
    code: 718,
    city: '福島県田村市'
  });
  amd_address_code.push({
    code: 719,
    city: '福島県東白川郡'
  });
  amd_address_code.push({
    code: 720,
    city: '福島県南会津郡'
  });
  amd_address_code.push({
    code: 721,
    city: '福島県南相馬市'
  });
  amd_address_code.push({
    code: 722,
    city: '福島県二本松市'
  });
  amd_address_code.push({
    code: 723,
    city: '福島県白河市'
  });
  amd_address_code.push({
    code: 724,
    city: '福島県福島市'
  });
  amd_address_code.push({
    code: 725,
    city: '福島県本宮市'
  });
  amd_address_code.push({
    code: 726,
    city: '福島県耶麻郡'
  });
  amd_address_code.push({
    code: 810,
    city: '茨城県久慈郡'
  });
  amd_address_code.push({
    code: 811,
    city: '茨城県牛久市'
  });
  amd_address_code.push({
    code: 812,
    city: '茨城県結城郡'
  });
  amd_address_code.push({
    code: 813,
    city: '茨城県結城市'
  });
  amd_address_code.push({
    code: 814,
    city: '茨城県古河市'
  });
  amd_address_code.push({
    code: 815,
    city: '茨城県行方市'
  });
  amd_address_code.push({
    code: 816,
    city: '茨城県高萩市'
  });
  amd_address_code.push({
    code: 817,
    city: '茨城県坂東市'
  });
  amd_address_code.push({
    code: 818,
    city: '茨城県桜川市'
  });
  amd_address_code.push({
    code: 819,
    city: '茨城県鹿嶋市'
  });
  amd_address_code.push({
    code: 820,
    city: '茨城県取手市'
  });
  amd_address_code.push({
    code: 821,
    city: '茨城県守谷市'
  });
  amd_address_code.push({
    code: 822,
    city: '茨城県小美玉市'
  });
  amd_address_code.push({
    code: 823,
    city: '茨城県常総市'
  });
  amd_address_code.push({
    code: 824,
    city: '茨城県常陸太田市'
  });
  amd_address_code.push({
    code: 825,
    city: '茨城県常陸大宮市'
  });
  amd_address_code.push({
    code: 826,
    city: '茨城県神栖市'
  });
  amd_address_code.push({
    code: 827,
    city: '茨城県水戸市'
  });
  amd_address_code.push({
    code: 828,
    city: '茨城県石岡市'
  });
  amd_address_code.push({
    code: 829,
    city: '茨城県筑西市'
  });
  amd_address_code.push({
    code: 830,
    city: '茨城県潮来市'
  });
  amd_address_code.push({
    code: 831,
    city: '茨城県土浦市'
  });
  amd_address_code.push({
    code: 832,
    city: '茨城県東茨城郡'
  });
  amd_address_code.push({
    code: 833,
    city: '茨城県那珂郡'
  });
  amd_address_code.push({
    code: 834,
    city: '茨城県那珂市'
  });
  amd_address_code.push({
    code: 835,
    city: '茨城県日立市'
  });
  amd_address_code.push({
    code: 836,
    city: '茨城県鉾田市'
  });
  amd_address_code.push({
    code: 837,
    city: '茨城県北茨城市'
  });
  amd_address_code.push({
    code: 838,
    city: '茨城県北相馬郡'
  });
  amd_address_code.push({
    code: 839,
    city: '茨城県龍ケ崎市'
  });
  amd_address_code.push({
    code: 910,
    city: '栃木県真岡市'
  });
  amd_address_code.push({
    code: 911,
    city: '栃木県足利市'
  });
  amd_address_code.push({
    code: 912,
    city: '栃木県大田原市'
  });
  amd_address_code.push({
    code: 913,
    city: '栃木県栃木市'
  });
  amd_address_code.push({
    code: 914,
    city: '栃木県那須烏山市'
  });
  amd_address_code.push({
    code: 915,
    city: '栃木県那須塩原市'
  });
  amd_address_code.push({
    code: 916,
    city: '栃木県那須郡'
  });
  amd_address_code.push({
    code: 917,
    city: '栃木県日光市'
  });
  amd_address_code.push({
    code: 918,
    city: '栃木県芳賀郡'
  });
  amd_address_code.push({
    code: 919,
    city: '栃木県矢板市'
  });
  amd_address_code.push({
    code: 1000,
    city: '群馬県'
  });
  amd_address_code.push({
    code: 1001,
    city: '群馬県みどり市'
  });
  amd_address_code.push({
    code: 1002,
    city: '群馬県安中市'
  });
  amd_address_code.push({
    code: 1003,
    city: '群馬県伊勢崎市'
  });
  amd_address_code.push({
    code: 1004,
    city: '群馬県甘楽郡'
  });
  amd_address_code.push({
    code: 1005,
    city: '群馬県館林市'
  });
  amd_address_code.push({
    code: 1006,
    city: '群馬県桐生市'
  });
  amd_address_code.push({
    code: 1007,
    city: '群馬県吾妻郡'
  });
  amd_address_code.push({
    code: 1008,
    city: '群馬県高崎市'
  });
  amd_address_code.push({
    code: 1009,
    city: '群馬県佐波郡'
  });
  amd_address_code.push({
    code: 1010,
    city: '群馬県渋川市'
  });
  amd_address_code.push({
    code: 1011,
    city: '群馬県沼田市'
  });
  amd_address_code.push({
    code: 1012,
    city: '群馬県前橋市'
  });
  amd_address_code.push({
    code: 1013,
    city: '群馬県多野郡'
  });
  amd_address_code.push({
    code: 1014,
    city: '群馬県太田市'
  });
  amd_address_code.push({
    code: 1015,
    city: '群馬県藤岡市'
  });
  amd_address_code.push({
    code: 1016,
    city: '群馬県富岡市'
  });
  amd_address_code.push({
    code: 1017,
    city: '群馬県北群馬郡'
  });
  amd_address_code.push({
    code: 1018,
    city: '群馬県邑楽郡'
  });
  amd_address_code.push({
    code: 1019,
    city: '群馬県利根郡'
  });
  amd_address_code.push({
    code: 1100,
    city: '埼玉県'
  });
  amd_address_code.push({
    code: 1101,
    city: '埼玉県さいたま市'
  });
  amd_address_code.push({
    code: 1102,
    city: '埼玉県ふじみ野市'
  });
  amd_address_code.push({
    code: 1103,
    city: '埼玉県羽生市'
  });
  amd_address_code.push({
    code: 1104,
    city: '埼玉県越谷市'
  });
  amd_address_code.push({
    code: 1105,
    city: '埼玉県桶川市'
  });
  amd_address_code.push({
    code: 1106,
    city: '埼玉県加須市'
  });
  amd_address_code.push({
    code: 1107,
    city: '埼玉県吉川市'
  });
  amd_address_code.push({
    code: 1108,
    city: '埼玉県久喜市'
  });
  amd_address_code.push({
    code: 1109,
    city: '埼玉県狭山市'
  });
  amd_address_code.push({
    code: 1110,
    city: '埼玉県熊谷市'
  });
  amd_address_code.push({
    code: 1111,
    city: '埼玉県戸田市'
  });
  amd_address_code.push({
    code: 1112,
    city: '埼玉県幸手市'
  });
  amd_address_code.push({
    code: 1113,
    city: '埼玉県行田市'
  });
  amd_address_code.push({
    code: 1114,
    city: '埼玉県鴻巣市'
  });
  amd_address_code.push({
    code: 1115,
    city: '埼玉県坂戸市'
  });
  amd_address_code.push({
    code: 1116,
    city: '埼玉県三郷市'
  });
  amd_address_code.push({
    code: 1117,
    city: '埼玉県志木市'
  });
  amd_address_code.push({
    code: 1118,
    city: '埼玉県児玉郡'
  });
  amd_address_code.push({
    code: 1119,
    city: '埼玉県春日部市'
  });
  amd_address_code.push({
    code: 1120,
    city: '埼玉県所沢市'
  });
  amd_address_code.push({
    code: 1121,
    city: '埼玉県上尾市'
  });
  amd_address_code.push({
    code: 1122,
    city: '埼玉県新座市'
  });
  amd_address_code.push({
    code: 1123,
    city: '埼玉県深谷市'
  });
  amd_address_code.push({
    code: 1124,
    city: '埼玉県川越市'
  });
  amd_address_code.push({
    code: 1125,
    city: '埼玉県川口市'
  });
  amd_address_code.push({
    code: 1126,
    city: '埼玉県草加市'
  });
  amd_address_code.push({
    code: 1127,
    city: '埼玉県大里郡'
  });
  amd_address_code.push({
    code: 1128,
    city: '埼玉県秩父郡'
  });
  amd_address_code.push({
    code: 1129,
    city: '埼玉県秩父市'
  });
  amd_address_code.push({
    code: 1130,
    city: '埼玉県朝霞市'
  });
  amd_address_code.push({
    code: 1131,
    city: '埼玉県鶴ヶ島市'
  });
  amd_address_code.push({
    code: 1132,
    city: '埼玉県東松山市'
  });
  amd_address_code.push({
    code: 1133,
    city: '埼玉県南埼玉郡'
  });
  amd_address_code.push({
    code: 1134,
    city: '埼玉県日高市'
  });
  amd_address_code.push({
    code: 1135,
    city: '埼玉県入間郡'
  });
  amd_address_code.push({
    code: 1136,
    city: '埼玉県入間市'
  });
  amd_address_code.push({
    code: 1137,
    city: '埼玉県八潮市'
  });
  amd_address_code.push({
    code: 1138,
    city: '埼玉県飯能市'
  });
  amd_address_code.push({
    code: 1139,
    city: '埼玉県比企郡'
  });
  amd_address_code.push({
    code: 1140,
    city: '埼玉県富士見市'
  });
  amd_address_code.push({
    code: 1141,
    city: '埼玉県北葛飾郡'
  });
  amd_address_code.push({
    code: 1142,
    city: '埼玉県北足立郡'
  });
  amd_address_code.push({
    code: 1143,
    city: '埼玉県北本市'
  });
  amd_address_code.push({
    code: 1144,
    city: '埼玉県本庄市'
  });
  amd_address_code.push({
    code: 1145,
    city: '埼玉県蓮田市'
  });
  amd_address_code.push({
    code: 1146,
    city: '埼玉県和光市'
  });
  amd_address_code.push({
    code: 1147,
    city: '埼玉県蕨市'
  });
  amd_address_code.push({
    code: 1200,
    city: '千葉県'
  });
  amd_address_code.push({
    code: 1201,
    city: '千葉県いすみ市'
  });
  amd_address_code.push({
    code: 1202,
    city: '千葉県旭市'
  });
  amd_address_code.push({
    code: 1203,
    city: '千葉県安房郡'
  });
  amd_address_code.push({
    code: 1204,
    city: '千葉県夷隅郡'
  });
  amd_address_code.push({
    code: 1205,
    city: '千葉県印西市'
  });
  amd_address_code.push({
    code: 1206,
    city: '千葉県印旛郡'
  });
  amd_address_code.push({
    code: 1207,
    city: '千葉県浦安市'
  });
  amd_address_code.push({
    code: 1208,
    city: '千葉県我孫子市'
  });
  amd_address_code.push({
    code: 1209,
    city: '千葉県鎌ケ谷市'
  });
  amd_address_code.push({
    code: 1210,
    city: '千葉県鴨川市'
  });
  amd_address_code.push({
    code: 1211,
    city: '千葉県館山市'
  });
  amd_address_code.push({
    code: 1212,
    city: '千葉県君津市'
  });
  amd_address_code.push({
    code: 1213,
    city: '千葉県香取郡'
  });
  amd_address_code.push({
    code: 1214,
    city: '千葉県香取市'
  });
  amd_address_code.push({
    code: 1215,
    city: '千葉県佐倉市'
  });
  amd_address_code.push({
    code: 1216,
    city: '千葉県山武郡'
  });
  amd_address_code.push({
    code: 1217,
    city: '千葉県山武市'
  });
  amd_address_code.push({
    code: 1218,
    city: '千葉県四街道市'
  });
  amd_address_code.push({
    code: 1219,
    city: '千葉県市原市'
  });
  amd_address_code.push({
    code: 1220,
    city: '千葉県市川市'
  });
  amd_address_code.push({
    code: 1221,
    city: '千葉県習志野市'
  });
  amd_address_code.push({
    code: 1222,
    city: '千葉県勝浦市'
  });
  amd_address_code.push({
    code: 1223,
    city: '千葉県松戸市'
  });
  amd_address_code.push({
    code: 1224,
    city: '千葉県成田市'
  });
  amd_address_code.push({
    code: 1225,
    city: '千葉県千葉市'
  });
  amd_address_code.push({
    code: 1226,
    city: '千葉県船橋市'
  });
  amd_address_code.push({
    code: 1227,
    city: '千葉県匝瑳市'
  });
  amd_address_code.push({
    code: 1228,
    city: '千葉県袖ケ浦市'
  });
  amd_address_code.push({
    code: 1229,
    city: '千葉県銚子市'
  });
  amd_address_code.push({
    code: 1230,
    city: '千葉県長生郡'
  });
  amd_address_code.push({
    code: 1231,
    city: '千葉県東金市'
  });
  amd_address_code.push({
    code: 1232,
    city: '千葉県南房総市'
  });
  amd_address_code.push({
    code: 1233,
    city: '千葉県柏市'
  });
  amd_address_code.push({
    code: 1234,
    city: '千葉県白井市'
  });
  amd_address_code.push({
    code: 1235,
    city: '千葉県八街市'
  });
  amd_address_code.push({
    code: 1236,
    city: '千葉県八千代市'
  });
  amd_address_code.push({
    code: 1237,
    city: '千葉県富津市'
  });
  amd_address_code.push({
    code: 1238,
    city: '千葉県富里市'
  });
  amd_address_code.push({
    code: 1239,
    city: '千葉県茂原市'
  });
  amd_address_code.push({
    code: 1240,
    city: '千葉県木更津市'
  });
  amd_address_code.push({
    code: 1241,
    city: '千葉県野田市'
  });
  amd_address_code.push({
    code: 1242,
    city: '千葉県流山市'
  });
  amd_address_code.push({
    code: 1300,
    city: '東京都'
  });
  amd_address_code.push({
    code: 1301,
    city: '東京都あきる野市'
  });
  amd_address_code.push({
    code: 1302,
    city: '東京都稲城市'
  });
  amd_address_code.push({
    code: 1303,
    city: '東京都羽村市'
  });
  amd_address_code.push({
    code: 1304,
    city: '東京都葛飾区'
  });
  amd_address_code.push({
    code: 1305,
    city: '東京都御蔵島村'
  });
  amd_address_code.push({
    code: 1306,
    city: '東京都江戸川区'
  });
  amd_address_code.push({
    code: 1307,
    city: '東京都江東区'
  });
  amd_address_code.push({
    code: 1308,
    city: '東京都港区'
  });
  amd_address_code.push({
    code: 1309,
    city: '東京都荒川区'
  });
  amd_address_code.push({
    code: 1310,
    city: '東京都国分寺市'
  });
  amd_address_code.push({
    code: 1311,
    city: '東京都国立市'
  });
  amd_address_code.push({
    code: 1312,
    city: '東京都狛江市'
  });
  amd_address_code.push({
    code: 1313,
    city: '東京都三鷹市'
  });
  amd_address_code.push({
    code: 1314,
    city: '東京都三宅島'
  });
  amd_address_code.push({
    code: 1315,
    city: '東京都渋谷区'
  });
  amd_address_code.push({
    code: 1316,
    city: '東京都小笠原村'
  });
  amd_address_code.push({
    code: 1317,
    city: '東京都小金井市'
  });
  amd_address_code.push({
    code: 1318,
    city: '東京都小平市'
  });
  amd_address_code.push({
    code: 1319,
    city: '東京都昭島市'
  });
  amd_address_code.push({
    code: 1320,
    city: '東京都新宿区'
  });
  amd_address_code.push({
    code: 1321,
    city: '東京都杉並区'
  });
  amd_address_code.push({
    code: 1322,
    city: '東京都世田谷区'
  });
  amd_address_code.push({
    code: 1323,
    city: '東京都清瀬市'
  });
  amd_address_code.push({
    code: 1324,
    city: '東京都西多摩郡'
  });
  amd_address_code.push({
    code: 1325,
    city: '東京都西東京市'
  });
  amd_address_code.push({
    code: 1326,
    city: '東京都青ヶ島村'
  });
  amd_address_code.push({
    code: 1327,
    city: '東京都青梅市'
  });
  amd_address_code.push({
    code: 1328,
    city: '東京都千代田区'
  });
  amd_address_code.push({
    code: 1329,
    city: '東京都足立区'
  });
  amd_address_code.push({
    code: 1330,
    city: '東京都多摩市'
  });
  amd_address_code.push({
    code: 1331,
    city: '東京都台東区'
  });
  amd_address_code.push({
    code: 1332,
    city: '東京都大田区'
  });
  amd_address_code.push({
    code: 1333,
    city: '東京都大島町'
  });
  amd_address_code.push({
    code: 1334,
    city: '東京都中央区'
  });
  amd_address_code.push({
    code: 1335,
    city: '東京都中野区'
  });
  amd_address_code.push({
    code: 1336,
    city: '東京都町田市'
  });
  amd_address_code.push({
    code: 1337,
    city: '東京都調布市'
  });
  amd_address_code.push({
    code: 1338,
    city: '東京都東久留米市'
  });
  amd_address_code.push({
    code: 1339,
    city: '東京都東村山市'
  });
  amd_address_code.push({
    code: 1340,
    city: '東京都東大和市'
  });
  amd_address_code.push({
    code: 1341,
    city: '東京都特別区部'
  });
  amd_address_code.push({
    code: 1342,
    city: '東京都日野市'
  });
  amd_address_code.push({
    code: 1343,
    city: '東京都八王子市'
  });
  amd_address_code.push({
    code: 1344,
    city: '東京都八丈島'
  });
  amd_address_code.push({
    code: 1345,
    city: '東京都板橋区'
  });
  amd_address_code.push({
    code: 1346,
    city: '東京都品川区'
  });
  amd_address_code.push({
    code: 1347,
    city: '東京都府中市'
  });
  amd_address_code.push({
    code: 1348,
    city: '東京都武蔵村山市'
  });
  amd_address_code.push({
    code: 1349,
    city: '東京都武蔵野市'
  });
  amd_address_code.push({
    code: 1350,
    city: '東京都福生市'
  });
  amd_address_code.push({
    code: 1351,
    city: '東京都文京区'
  });
  amd_address_code.push({
    code: 1352,
    city: '東京都豊島区'
  });
  amd_address_code.push({
    code: 1353,
    city: '東京都北区'
  });
  amd_address_code.push({
    code: 1354,
    city: '東京都墨田区'
  });
  amd_address_code.push({
    code: 1355,
    city: '東京都目黒区'
  });
  amd_address_code.push({
    code: 1356,
    city: '東京都立川市'
  });
  amd_address_code.push({
    code: 1357,
    city: '東京都練馬区'
  });
  amd_address_code.push({
    code: 1400,
    city: '神奈川県'
  });
  amd_address_code.push({
    code: 1401,
    city: '神奈川県愛甲郡'
  });
  amd_address_code.push({
    code: 1402,
    city: '神奈川県綾瀬市'
  });
  amd_address_code.push({
    code: 1403,
    city: '神奈川県伊勢原市'
  });
  amd_address_code.push({
    code: 1404,
    city: '神奈川県横須賀市'
  });
  amd_address_code.push({
    code: 1405,
    city: '神奈川県横浜市'
  });
  amd_address_code.push({
    code: 1406,
    city: '神奈川県海老名市'
  });
  amd_address_code.push({
    code: 1407,
    city: '神奈川県鎌倉市'
  });
  amd_address_code.push({
    code: 1408,
    city: '神奈川県茅ヶ崎市'
  });
  amd_address_code.push({
    code: 1409,
    city: '神奈川県厚木市'
  });
  amd_address_code.push({
    code: 1410,
    city: '神奈川県高座郡'
  });
  amd_address_code.push({
    code: 1411,
    city: '神奈川県座間市'
  });
  amd_address_code.push({
    code: 1412,
    city: '神奈川県三浦郡'
  });
  amd_address_code.push({
    code: 1413,
    city: '神奈川県三浦市'
  });
  amd_address_code.push({
    code: 1414,
    city: '神奈川県小田原市'
  });
  amd_address_code.push({
    code: 1415,
    city: '神奈川県秦野市'
  });
  amd_address_code.push({
    code: 1416,
    city: '神奈川県逗子市'
  });
  amd_address_code.push({
    code: 1417,
    city: '神奈川県川崎市'
  });
  amd_address_code.push({
    code: 1418,
    city: '神奈川県相模原市'
  });
  amd_address_code.push({
    code: 1419,
    city: '神奈川県足柄下郡'
  });
  amd_address_code.push({
    code: 1420,
    city: '神奈川県足柄上郡'
  });
  amd_address_code.push({
    code: 1421,
    city: '神奈川県大和市'
  });
  amd_address_code.push({
    code: 1422,
    city: '神奈川県中郡'
  });
  amd_address_code.push({
    code: 1423,
    city: '神奈川県藤沢市'
  });
  amd_address_code.push({
    code: 1424,
    city: '神奈川県南足柄市'
  });
  amd_address_code.push({
    code: 1425,
    city: '神奈川県平塚市'
  });
  amd_address_code.push({
    code: 1500,
    city: '新潟県'
  });
  amd_address_code.push({
    code: 1501,
    city: '新潟県阿賀野市'
  });
  amd_address_code.push({
    code: 1502,
    city: '新潟県燕市'
  });
  amd_address_code.push({
    code: 1503,
    city: '新潟県加茂市'
  });
  amd_address_code.push({
    code: 1504,
    city: '新潟県刈羽郡'
  });
  amd_address_code.push({
    code: 1505,
    city: '新潟県岩船郡'
  });
  amd_address_code.push({
    code: 1506,
    city: '新潟県魚沼市'
  });
  amd_address_code.push({
    code: 1507,
    city: '新潟県見附市'
  });
  amd_address_code.push({
    code: 1508,
    city: '新潟県五泉市'
  });
  amd_address_code.push({
    code: 1509,
    city: '新潟県佐渡市'
  });
  amd_address_code.push({
    code: 1510,
    city: '新潟県三条市'
  });
  amd_address_code.push({
    code: 1511,
    city: '新潟県三島郡'
  });
  amd_address_code.push({
    code: 1512,
    city: '新潟県糸魚川市'
  });
  amd_address_code.push({
    code: 1513,
    city: '新潟県十日町市'
  });
  amd_address_code.push({
    code: 1514,
    city: '新潟県小千谷市'
  });
  amd_address_code.push({
    code: 1515,
    city: '新潟県上越市'
  });
  amd_address_code.push({
    code: 1516,
    city: '新潟県新潟市'
  });
  amd_address_code.push({
    code: 1517,
    city: '新潟県新発田市'
  });
  amd_address_code.push({
    code: 1518,
    city: '新潟県西蒲原郡'
  });
  amd_address_code.push({
    code: 1519,
    city: '新潟県村上市'
  });
  amd_address_code.push({
    code: 1520,
    city: '新潟県胎内市'
  });
  amd_address_code.push({
    code: 1521,
    city: '新潟県中魚沼郡'
  });
  amd_address_code.push({
    code: 1522,
    city: '新潟県長岡市'
  });
  amd_address_code.push({
    code: 1523,
    city: '新潟県東蒲原郡'
  });
  amd_address_code.push({
    code: 1524,
    city: '新潟県南蒲原郡'
  });
  amd_address_code.push({
    code: 1525,
    city: '新潟県南魚沼郡'
  });
  amd_address_code.push({
    code: 1526,
    city: '新潟県南魚沼市'
  });
  amd_address_code.push({
    code: 1527,
    city: '新潟県柏崎市'
  });
  amd_address_code.push({
    code: 1528,
    city: '新潟県北蒲原郡'
  });
  amd_address_code.push({
    code: 1529,
    city: '新潟県妙高市'
  });
  amd_address_code.push({
    code: 1600,
    city: '富山県'
  });
  amd_address_code.push({
    code: 1601,
    city: '富山県下新川郡'
  });
  amd_address_code.push({
    code: 1602,
    city: '富山県滑川市'
  });
  amd_address_code.push({
    code: 1603,
    city: '富山県魚津市'
  });
  amd_address_code.push({
    code: 1604,
    city: '富山県高岡市'
  });
  amd_address_code.push({
    code: 1605,
    city: '富山県黒部市'
  });
  amd_address_code.push({
    code: 1606,
    city: '富山県射水市'
  });
  amd_address_code.push({
    code: 1607,
    city: '富山県小矢部市'
  });
  amd_address_code.push({
    code: 1608,
    city: '富山県中新川郡'
  });
  amd_address_code.push({
    code: 1609,
    city: '富山県砺波市'
  });
  amd_address_code.push({
    code: 1610,
    city: '富山県南砺市'
  });
  amd_address_code.push({
    code: 1611,
    city: '富山県氷見市'
  });
  amd_address_code.push({
    code: 1612,
    city: '富山県富山市'
  });
  amd_address_code.push({
    code: 1700,
    city: '石川県'
  });
  amd_address_code.push({
    code: 1701,
    city: '石川県かほく市'
  });
  amd_address_code.push({
    code: 1702,
    city: '石川県羽咋郡'
  });
  amd_address_code.push({
    code: 1703,
    city: '石川県羽咋市'
  });
  amd_address_code.push({
    code: 1704,
    city: '石川県加賀市'
  });
  amd_address_code.push({
    code: 1705,
    city: '石川県河北郡'
  });
  amd_address_code.push({
    code: 1706,
    city: '石川県金沢市'
  });
  amd_address_code.push({
    code: 1707,
    city: '石川県鹿島郡'
  });
  amd_address_code.push({
    code: 1708,
    city: '石川県七尾市'
  });
  amd_address_code.push({
    code: 1709,
    city: '石川県珠洲市'
  });
  amd_address_code.push({
    code: 1710,
    city: '石川県小松市'
  });
  amd_address_code.push({
    code: 1711,
    city: '石川県能美郡'
  });
  amd_address_code.push({
    code: 1712,
    city: '石川県能美市'
  });
  amd_address_code.push({
    code: 1713,
    city: '石川県白山市'
  });
  amd_address_code.push({
    code: 1714,
    city: '石川県鳳珠郡'
  });
  amd_address_code.push({
    code: 1715,
    city: '石川県野々市市'
  });
  amd_address_code.push({
    code: 1716,
    city: '石川県輪島市'
  });
  amd_address_code.push({
    code: 1800,
    city: '福井県'
  });
  amd_address_code.push({
    code: 1801,
    city: '福井県あわら市'
  });
  amd_address_code.push({
    code: 1802,
    city: '福井県越前市'
  });
  amd_address_code.push({
    code: 1803,
    city: '福井県吉田郡'
  });
  amd_address_code.push({
    code: 1804,
    city: '福井県今立郡'
  });
  amd_address_code.push({
    code: 1805,
    city: '福井県坂井市'
  });
  amd_address_code.push({
    code: 1806,
    city: '福井県鯖江市'
  });
  amd_address_code.push({
    code: 1807,
    city: '福井県三方郡'
  });
  amd_address_code.push({
    code: 1808,
    city: '福井県三方上中郡'
  });
  amd_address_code.push({
    code: 1809,
    city: '福井県勝山市'
  });
  amd_address_code.push({
    code: 1810,
    city: '福井県小浜市'
  });
  amd_address_code.push({
    code: 1811,
    city: '福井県大飯郡'
  });
  amd_address_code.push({
    code: 1812,
    city: '福井県大野市'
  });
  amd_address_code.push({
    code: 1813,
    city: '福井県丹生郡'
  });
  amd_address_code.push({
    code: 1814,
    city: '福井県敦賀市'
  });
  amd_address_code.push({
    code: 1815,
    city: '福井県南条郡'
  });
  amd_address_code.push({
    code: 1816,
    city: '福井県福井市'
  });
  amd_address_code.push({
    code: 1900,
    city: '山梨県'
  });
  amd_address_code.push({
    code: 1901,
    city: '山梨県甲州市'
  });
  amd_address_code.push({
    code: 1902,
    city: '山梨県甲斐市'
  });
  amd_address_code.push({
    code: 1903,
    city: '山梨県甲府市'
  });
  amd_address_code.push({
    code: 1904,
    city: '山梨県山梨市'
  });
  amd_address_code.push({
    code: 1905,
    city: '山梨県上野原市'
  });
  amd_address_code.push({
    code: 1906,
    city: '山梨県西八代郡'
  });
  amd_address_code.push({
    code: 1907,
    city: '山梨県大月市'
  });
  amd_address_code.push({
    code: 1908,
    city: '山梨県中央市'
  });
  amd_address_code.push({
    code: 1909,
    city: '山梨県中巨摩郡'
  });
  amd_address_code.push({
    code: 1910,
    city: '山梨県笛吹市'
  });
  amd_address_code.push({
    code: 1911,
    city: '山梨県都留市'
  });
  amd_address_code.push({
    code: 1912,
    city: '山梨県南アルプス市'
  });
  amd_address_code.push({
    code: 1913,
    city: '山梨県南巨摩郡'
  });
  amd_address_code.push({
    code: 1914,
    city: '山梨県南都留郡'
  });
  amd_address_code.push({
    code: 1915,
    city: '山梨県韮崎市'
  });
  amd_address_code.push({
    code: 1916,
    city: '山梨県富士吉田市'
  });
  amd_address_code.push({
    code: 1917,
    city: '山梨県北杜市'
  });
  amd_address_code.push({
    code: 1918,
    city: '山梨県北都留郡'
  });
  amd_address_code.push({
    code: 2000,
    city: '長野県'
  });
  amd_address_code.push({
    code: 2001,
    city: '長野県安曇野市'
  });
  amd_address_code.push({
    code: 2002,
    city: '長野県伊那市'
  });
  amd_address_code.push({
    code: 2003,
    city: '長野県塩尻市'
  });
  amd_address_code.push({
    code: 2004,
    city: '長野県岡谷市'
  });
  amd_address_code.push({
    code: 2005,
    city: '長野県下伊那郡'
  });
  amd_address_code.push({
    code: 2006,
    city: '長野県下高井郡'
  });
  amd_address_code.push({
    code: 2007,
    city: '長野県下水内郡'
  });
  amd_address_code.push({
    code: 2008,
    city: '長野県茅野市'
  });
  amd_address_code.push({
    code: 2009,
    city: '長野県駒ヶ根市'
  });
  amd_address_code.push({
    code: 2010,
    city: '長野県佐久市'
  });
  amd_address_code.push({
    code: 2011,
    city: '長野県小県郡'
  });
  amd_address_code.push({
    code: 2012,
    city: '長野県小諸市'
  });
  amd_address_code.push({
    code: 2013,
    city: '長野県松本市'
  });
  amd_address_code.push({
    code: 2014,
    city: '長野県上伊那郡'
  });
  amd_address_code.push({
    code: 2015,
    city: '長野県上高井郡'
  });
  amd_address_code.push({
    code: 2016,
    city: '長野県上水内郡'
  });
  amd_address_code.push({
    code: 2017,
    city: '長野県上田市'
  });
  amd_address_code.push({
    code: 2018,
    city: '長野県埴科郡'
  });
  amd_address_code.push({
    code: 2019,
    city: '長野県諏訪郡'
  });
  amd_address_code.push({
    code: 2020,
    city: '長野県諏訪市'
  });
  amd_address_code.push({
    code: 2021,
    city: '長野県須坂市'
  });
  amd_address_code.push({
    code: 2022,
    city: '長野県千曲市'
  });
  amd_address_code.push({
    code: 2023,
    city: '長野県大町市'
  });
  amd_address_code.push({
    code: 2024,
    city: '長野県中野市'
  });
  amd_address_code.push({
    code: 2025,
    city: '長野県長野市'
  });
  amd_address_code.push({
    code: 2026,
    city: '長野県東御市'
  });
  amd_address_code.push({
    code: 2027,
    city: '長野県東筑摩郡'
  });
  amd_address_code.push({
    code: 2028,
    city: '長野県南佐久郡'
  });
  amd_address_code.push({
    code: 2029,
    city: '長野県飯山市'
  });
  amd_address_code.push({
    code: 2030,
    city: '長野県飯田市'
  });
  amd_address_code.push({
    code: 2031,
    city: '長野県北安曇郡'
  });
  amd_address_code.push({
    code: 2032,
    city: '長野県北佐久郡'
  });
  amd_address_code.push({
    code: 2033,
    city: '長野県木曽郡'
  });
  amd_address_code.push({
    code: 2100,
    city: '岐阜県'
  });
  amd_address_code.push({
    code: 2101,
    city: '岐阜県安八郡'
  });
  amd_address_code.push({
    code: 2102,
    city: '岐阜県羽島郡'
  });
  amd_address_code.push({
    code: 2103,
    city: '岐阜県羽島市'
  });
  amd_address_code.push({
    code: 2104,
    city: '岐阜県下呂市'
  });
  amd_address_code.push({
    code: 2105,
    city: '岐阜県加茂郡'
  });
  amd_address_code.push({
    code: 2106,
    city: '岐阜県可児郡'
  });
  amd_address_code.push({
    code: 2107,
    city: '岐阜県可児市'
  });
  amd_address_code.push({
    code: 2108,
    city: '岐阜県海津市'
  });
  amd_address_code.push({
    code: 2109,
    city: '岐阜県各務原市'
  });
  amd_address_code.push({
    code: 2110,
    city: '岐阜県関市'
  });
  amd_address_code.push({
    code: 2111,
    city: '岐阜県岐阜市'
  });
  amd_address_code.push({
    code: 2112,
    city: '岐阜県郡上市'
  });
  amd_address_code.push({
    code: 2113,
    city: '岐阜県恵那市'
  });
  amd_address_code.push({
    code: 2114,
    city: '岐阜県高山市'
  });
  amd_address_code.push({
    code: 2115,
    city: '岐阜県山県市'
  });
  amd_address_code.push({
    code: 2116,
    city: '岐阜県瑞穂市'
  });
  amd_address_code.push({
    code: 2117,
    city: '岐阜県瑞浪市'
  });
  amd_address_code.push({
    code: 2118,
    city: '岐阜県多治見市'
  });
  amd_address_code.push({
    code: 2119,
    city: '岐阜県大垣市'
  });
  amd_address_code.push({
    code: 2120,
    city: '岐阜県大野郡'
  });
  amd_address_code.push({
    code: 2121,
    city: '岐阜県中津川市'
  });
  amd_address_code.push({
    code: 2122,
    city: '岐阜県土岐市'
  });
  amd_address_code.push({
    code: 2123,
    city: '岐阜県飛騨市'
  });
  amd_address_code.push({
    code: 2124,
    city: '岐阜県美濃加茂市'
  });
  amd_address_code.push({
    code: 2125,
    city: '岐阜県美濃市'
  });
  amd_address_code.push({
    code: 2126,
    city: '岐阜県不破郡'
  });
  amd_address_code.push({
    code: 2127,
    city: '岐阜県本巣郡'
  });
  amd_address_code.push({
    code: 2128,
    city: '岐阜県本巣市'
  });
  amd_address_code.push({
    code: 2129,
    city: '岐阜県揖斐郡'
  });
  amd_address_code.push({
    code: 2130,
    city: '岐阜県養老郡'
  });
  amd_address_code.push({
    code: 2200,
    city: '静岡県'
  });
  amd_address_code.push({
    code: 2201,
    city: '静岡県伊東市'
  });
  amd_address_code.push({
    code: 2202,
    city: '静岡県伊豆の国市'
  });
  amd_address_code.push({
    code: 2203,
    city: '静岡県伊豆市'
  });
  amd_address_code.push({
    code: 2204,
    city: '静岡県下田市'
  });
  amd_address_code.push({
    code: 2205,
    city: '静岡県賀茂郡'
  });
  amd_address_code.push({
    code: 2206,
    city: '静岡県掛川市'
  });
  amd_address_code.push({
    code: 2207,
    city: '静岡県菊川市'
  });
  amd_address_code.push({
    code: 2208,
    city: '静岡県湖西市'
  });
  amd_address_code.push({
    code: 2209,
    city: '静岡県御前崎市'
  });
  amd_address_code.push({
    code: 2210,
    city: '静岡県御殿場市'
  });
  amd_address_code.push({
    code: 2211,
    city: '静岡県三島市'
  });
  amd_address_code.push({
    code: 2212,
    city: '静岡県周智郡'
  });
  amd_address_code.push({
    code: 2213,
    city: '静岡県駿東郡'
  });
  amd_address_code.push({
    code: 2214,
    city: '静岡県沼津市'
  });
  amd_address_code.push({
    code: 2215,
    city: '静岡県焼津市'
  });
  amd_address_code.push({
    code: 2216,
    city: '静岡県榛原郡'
  });
  amd_address_code.push({
    code: 2217,
    city: '静岡県裾野市'
  });
  amd_address_code.push({
    code: 2218,
    city: '静岡県静岡市'
  });
  amd_address_code.push({
    code: 2219,
    city: '静岡県袋井市'
  });
  amd_address_code.push({
    code: 2220,
    city: '静岡県田方郡'
  });
  amd_address_code.push({
    code: 2221,
    city: '静岡県島田市'
  });
  amd_address_code.push({
    code: 2222,
    city: '静岡県藤枝市'
  });
  amd_address_code.push({
    code: 2223,
    city: '静岡県熱海市'
  });
  amd_address_code.push({
    code: 2224,
    city: '静岡県磐田市'
  });
  amd_address_code.push({
    code: 2225,
    city: '静岡県浜松市'
  });
  amd_address_code.push({
    code: 2226,
    city: '静岡県富士宮市'
  });
  amd_address_code.push({
    code: 2227,
    city: '静岡県富士市'
  });
  amd_address_code.push({
    code: 2228,
    city: '静岡県牧之原市'
  });
  amd_address_code.push({
    code: 2300,
    city: '愛知県'
  });
  amd_address_code.push({
    code: 2301,
    city: '愛知県あま市'
  });
  amd_address_code.push({
    code: 2302,
    city: '愛知県みよし市'
  });
  amd_address_code.push({
    code: 2303,
    city: '愛知県愛西市'
  });
  amd_address_code.push({
    code: 2304,
    city: '愛知県愛知郡'
  });
  amd_address_code.push({
    code: 2305,
    city: '愛知県安城市'
  });
  amd_address_code.push({
    code: 2306,
    city: '愛知県一宮市'
  });
  amd_address_code.push({
    code: 2307,
    city: '愛知県稲沢市'
  });
  amd_address_code.push({
    code: 2308,
    city: '愛知県岡崎市'
  });
  amd_address_code.push({
    code: 2309,
    city: '愛知県海部郡'
  });
  amd_address_code.push({
    code: 2310,
    city: '愛知県額田郡'
  });
  amd_address_code.push({
    code: 2311,
    city: '愛知県蒲郡市'
  });
  amd_address_code.push({
    code: 2312,
    city: '愛知県刈谷市'
  });
  amd_address_code.push({
    code: 2313,
    city: '愛知県岩倉市'
  });
  amd_address_code.push({
    code: 2314,
    city: '愛知県犬山市'
  });
  amd_address_code.push({
    code: 2315,
    city: '愛知県江南市'
  });
  amd_address_code.push({
    code: 2316,
    city: '愛知県高浜市'
  });
  amd_address_code.push({
    code: 2317,
    city: '愛知県春日井市'
  });
  amd_address_code.push({
    code: 2318,
    city: '愛知県小牧市'
  });
  amd_address_code.push({
    code: 2319,
    city: '愛知県常滑市'
  });
  amd_address_code.push({
    code: 2320,
    city: '愛知県新城市'
  });
  amd_address_code.push({
    code: 2321,
    city: '愛知県瀬戸市'
  });
  amd_address_code.push({
    code: 2322,
    city: '愛知県清須市'
  });
  amd_address_code.push({
    code: 2323,
    city: '愛知県西春日井郡'
  });
  amd_address_code.push({
    code: 2324,
    city: '愛知県西尾市'
  });
  amd_address_code.push({
    code: 2325,
    city: '愛知県大府市'
  });
  amd_address_code.push({
    code: 2326,
    city: '愛知県丹羽郡'
  });
  amd_address_code.push({
    code: 2327,
    city: '愛知県知多郡'
  });
  amd_address_code.push({
    code: 2328,
    city: '愛知県知多市'
  });
  amd_address_code.push({
    code: 2329,
    city: '愛知県知立市'
  });
  amd_address_code.push({
    code: 2330,
    city: '愛知県長久手市'
  });
  amd_address_code.push({
    code: 2331,
    city: '愛知県津島市'
  });
  amd_address_code.push({
    code: 2332,
    city: '愛知県田原市'
  });
  amd_address_code.push({
    code: 2333,
    city: '愛知県東海市'
  });
  amd_address_code.push({
    code: 2334,
    city: '愛知県日進市'
  });
  amd_address_code.push({
    code: 2335,
    city: '愛知県半田市'
  });
  amd_address_code.push({
    code: 2336,
    city: '愛知県尾張旭市'
  });
  amd_address_code.push({
    code: 2337,
    city: '愛知県碧南市'
  });
  amd_address_code.push({
    code: 2338,
    city: '愛知県豊橋市'
  });
  amd_address_code.push({
    code: 2339,
    city: '愛知県豊川市'
  });
  amd_address_code.push({
    code: 2340,
    city: '愛知県豊田市'
  });
  amd_address_code.push({
    code: 2341,
    city: '愛知県豊明市'
  });
  amd_address_code.push({
    code: 2342,
    city: '愛知県北設楽郡'
  });
  amd_address_code.push({
    code: 2343,
    city: '愛知県北名古屋市'
  });
  amd_address_code.push({
    code: 2344,
    city: '愛知県名古屋市'
  });
  amd_address_code.push({
    code: 2345,
    city: '愛知県弥富市'
  });
  amd_address_code.push({
    code: 2400,
    city: '三重県'
  });
  amd_address_code.push({
    code: 2401,
    city: '三重県いなべ市'
  });
  amd_address_code.push({
    code: 2402,
    city: '三重県伊賀市'
  });
  amd_address_code.push({
    code: 2403,
    city: '三重県伊勢市'
  });
  amd_address_code.push({
    code: 2404,
    city: '三重県員弁郡'
  });
  amd_address_code.push({
    code: 2405,
    city: '三重県亀山市'
  });
  amd_address_code.push({
    code: 2406,
    city: '三重県熊野市'
  });
  amd_address_code.push({
    code: 2407,
    city: '三重県桑名郡'
  });
  amd_address_code.push({
    code: 2408,
    city: '三重県桑名市'
  });
  amd_address_code.push({
    code: 2409,
    city: '三重県三重郡'
  });
  amd_address_code.push({
    code: 2410,
    city: '三重県四日市市'
  });
  amd_address_code.push({
    code: 2411,
    city: '三重県志摩市'
  });
  amd_address_code.push({
    code: 2412,
    city: '三重県松阪市'
  });
  amd_address_code.push({
    code: 2413,
    city: '三重県多気郡'
  });
  amd_address_code.push({
    code: 2414,
    city: '三重県鳥羽市'
  });
  amd_address_code.push({
    code: 2415,
    city: '三重県津市'
  });
  amd_address_code.push({
    code: 2416,
    city: '三重県度会郡'
  });
  amd_address_code.push({
    code: 2417,
    city: '三重県南牟婁郡'
  });
  amd_address_code.push({
    code: 2418,
    city: '三重県尾鷲市'
  });
  amd_address_code.push({
    code: 2419,
    city: '三重県北牟婁郡'
  });
  amd_address_code.push({
    code: 2420,
    city: '三重県名張市'
  });
  amd_address_code.push({
    code: 2421,
    city: '三重県鈴鹿市'
  });
  amd_address_code.push({
    code: 2500,
    city: '滋賀県'
  });
  amd_address_code.push({
    code: 2501,
    city: '滋賀県愛知郡'
  });
  amd_address_code.push({
    code: 2502,
    city: '滋賀県蒲生郡'
  });
  amd_address_code.push({
    code: 2503,
    city: '滋賀県近江八幡市'
  });
  amd_address_code.push({
    code: 2504,
    city: '滋賀県栗東市'
  });
  amd_address_code.push({
    code: 2505,
    city: '滋賀県犬上郡'
  });
  amd_address_code.push({
    code: 2506,
    city: '滋賀県湖南市'
  });
  amd_address_code.push({
    code: 2507,
    city: '滋賀県甲賀市'
  });
  amd_address_code.push({
    code: 2508,
    city: '滋賀県高島市'
  });
  amd_address_code.push({
    code: 2509,
    city: '滋賀県守山市'
  });
  amd_address_code.push({
    code: 2510,
    city: '滋賀県草津市'
  });
  amd_address_code.push({
    code: 2511,
    city: '滋賀県大津市'
  });
  amd_address_code.push({
    code: 2512,
    city: '滋賀県長浜市'
  });
  amd_address_code.push({
    code: 2513,
    city: '滋賀県東近江市'
  });
  amd_address_code.push({
    code: 2514,
    city: '滋賀県彦根市'
  });
  amd_address_code.push({
    code: 2515,
    city: '滋賀県米原市'
  });
  amd_address_code.push({
    code: 2516,
    city: '滋賀県野洲市'
  });
  amd_address_code.push({
    code: 2600,
    city: '京都府'
  });
  amd_address_code.push({
    code: 2601,
    city: '京都府綾部市'
  });
  amd_address_code.push({
    code: 2602,
    city: '京都府宇治市'
  });
  amd_address_code.push({
    code: 2603,
    city: '京都府乙訓郡'
  });
  amd_address_code.push({
    code: 2604,
    city: '京都府亀岡市'
  });
  amd_address_code.push({
    code: 2605,
    city: '京都府久世郡'
  });
  amd_address_code.push({
    code: 2606,
    city: '京都府宮津市'
  });
  amd_address_code.push({
    code: 2607,
    city: '京都府京丹後市'
  });
  amd_address_code.push({
    code: 2608,
    city: '京都府京田辺市'
  });
  amd_address_code.push({
    code: 2609,
    city: '京都府京都市'
  });
  amd_address_code.push({
    code: 2610,
    city: '京都府向日市'
  });
  amd_address_code.push({
    code: 2611,
    city: '京都府城陽市'
  });
  amd_address_code.push({
    code: 2612,
    city: '京都府船井郡'
  });
  amd_address_code.push({
    code: 2613,
    city: '京都府相楽郡'
  });
  amd_address_code.push({
    code: 2614,
    city: '京都府長岡京市'
  });
  amd_address_code.push({
    code: 2615,
    city: '京都府綴喜郡'
  });
  amd_address_code.push({
    code: 2616,
    city: '京都府南丹市'
  });
  amd_address_code.push({
    code: 2617,
    city: '京都府八幡市'
  });
  amd_address_code.push({
    code: 2618,
    city: '京都府舞鶴市'
  });
  amd_address_code.push({
    code: 2619,
    city: '京都府福知山市'
  });
  amd_address_code.push({
    code: 2620,
    city: '京都府木津川市'
  });
  amd_address_code.push({
    code: 2621,
    city: '京都府与謝郡'
  });
  amd_address_code.push({
    code: 2700,
    city: '大阪府'
  });
  amd_address_code.push({
    code: 2701,
    city: '大阪府茨木市'
  });
  amd_address_code.push({
    code: 2702,
    city: '大阪府羽曳野市'
  });
  amd_address_code.push({
    code: 2703,
    city: '大阪府河内長野市'
  });
  amd_address_code.push({
    code: 2704,
    city: '大阪府貝塚市'
  });
  amd_address_code.push({
    code: 2705,
    city: '大阪府岸和田市'
  });
  amd_address_code.push({
    code: 2706,
    city: '大阪府交野市'
  });
  amd_address_code.push({
    code: 2707,
    city: '大阪府高石市'
  });
  amd_address_code.push({
    code: 2708,
    city: '大阪府高槻市'
  });
  amd_address_code.push({
    code: 2709,
    city: '大阪府阪南市'
  });
  amd_address_code.push({
    code: 2710,
    city: '大阪府堺市'
  });
  amd_address_code.push({
    code: 2711,
    city: '大阪府三島郡'
  });
  amd_address_code.push({
    code: 2712,
    city: '大阪府四條畷市'
  });
  amd_address_code.push({
    code: 2713,
    city: '大阪府守口市'
  });
  amd_address_code.push({
    code: 2714,
    city: '大阪府松原市'
  });
  amd_address_code.push({
    code: 2715,
    city: '大阪府寝屋川市'
  });
  amd_address_code.push({
    code: 2716,
    city: '大阪府吹田市'
  });
  amd_address_code.push({
    code: 2717,
    city: '大阪府摂津市'
  });
  amd_address_code.push({
    code: 2718,
    city: '大阪府泉佐野市'
  });
  amd_address_code.push({
    code: 2719,
    city: '大阪府泉大津市'
  });
  amd_address_code.push({
    code: 2720,
    city: '大阪府泉南郡'
  });
  amd_address_code.push({
    code: 2721,
    city: '大阪府泉南市'
  });
  amd_address_code.push({
    code: 2722,
    city: '大阪府泉北郡'
  });
  amd_address_code.push({
    code: 2723,
    city: '大阪府大阪狭山市'
  });
  amd_address_code.push({
    code: 2724,
    city: '大阪府大阪市'
  });
  amd_address_code.push({
    code: 2725,
    city: '大阪府大東市'
  });
  amd_address_code.push({
    code: 2726,
    city: '大阪府池田市'
  });
  amd_address_code.push({
    code: 2727,
    city: '大阪府東大阪市'
  });
  amd_address_code.push({
    code: 2728,
    city: '大阪府藤井寺市'
  });
  amd_address_code.push({
    code: 2729,
    city: '大阪府南河内郡'
  });
  amd_address_code.push({
    code: 2730,
    city: '大阪府柏原市'
  });
  amd_address_code.push({
    code: 2731,
    city: '大阪府八尾市'
  });
  amd_address_code.push({
    code: 2732,
    city: '大阪府富田林市'
  });
  amd_address_code.push({
    code: 2733,
    city: '大阪府豊中市'
  });
  amd_address_code.push({
    code: 2734,
    city: '大阪府豊能郡'
  });
  amd_address_code.push({
    code: 2735,
    city: '大阪府枚方市'
  });
  amd_address_code.push({
    code: 2736,
    city: '大阪府箕面市'
  });
  amd_address_code.push({
    code: 2737,
    city: '大阪府門真市'
  });
  amd_address_code.push({
    code: 2738,
    city: '大阪府和泉市'
  });
  amd_address_code.push({
    code: 2800,
    city: '兵庫県'
  });
  amd_address_code.push({
    code: 2801,
    city: '兵庫県たつの市'
  });
  amd_address_code.push({
    code: 2802,
    city: '兵庫県芦屋市'
  });
  amd_address_code.push({
    code: 2803,
    city: '兵庫県伊丹市'
  });
  amd_address_code.push({
    code: 2804,
    city: '兵庫県加古郡'
  });
  amd_address_code.push({
    code: 2805,
    city: '兵庫県加古川市'
  });
  amd_address_code.push({
    code: 2806,
    city: '兵庫県加西市'
  });
  amd_address_code.push({
    code: 2807,
    city: '兵庫県加東市'
  });
  amd_address_code.push({
    code: 2808,
    city: '兵庫県高砂市'
  });
  amd_address_code.push({
    code: 2809,
    city: '兵庫県佐用郡'
  });
  amd_address_code.push({
    code: 2810,
    city: '兵庫県三田市'
  });
  amd_address_code.push({
    code: 2811,
    city: '兵庫県三木市'
  });
  amd_address_code.push({
    code: 2812,
    city: '兵庫県宍粟市'
  });
  amd_address_code.push({
    code: 2813,
    city: '兵庫県篠山市'
  });
  amd_address_code.push({
    code: 2814,
    city: '兵庫県洲本市'
  });
  amd_address_code.push({
    code: 2815,
    city: '兵庫県小野市'
  });
  amd_address_code.push({
    code: 2816,
    city: '兵庫県神戸市'
  });
  amd_address_code.push({
    code: 2817,
    city: '兵庫県神崎郡'
  });
  amd_address_code.push({
    code: 2818,
    city: '兵庫県西宮市'
  });
  amd_address_code.push({
    code: 2819,
    city: '兵庫県西脇市'
  });
  amd_address_code.push({
    code: 2820,
    city: '兵庫県赤穂郡'
  });
  amd_address_code.push({
    code: 2821,
    city: '兵庫県赤穂市'
  });
  amd_address_code.push({
    code: 2822,
    city: '兵庫県川西市'
  });
  amd_address_code.push({
    code: 2823,
    city: '兵庫県川辺郡'
  });
  amd_address_code.push({
    code: 2824,
    city: '兵庫県相生市'
  });
  amd_address_code.push({
    code: 2825,
    city: '兵庫県多可郡'
  });
  amd_address_code.push({
    code: 2826,
    city: '兵庫県丹波市'
  });
  amd_address_code.push({
    code: 2827,
    city: '兵庫県淡路市'
  });
  amd_address_code.push({
    code: 2828,
    city: '兵庫県朝来市'
  });
  amd_address_code.push({
    code: 2829,
    city: '兵庫県南あわじ市'
  });
  amd_address_code.push({
    code: 2830,
    city: '兵庫県尼崎市'
  });
  amd_address_code.push({
    code: 2831,
    city: '兵庫県美方郡'
  });
  amd_address_code.push({
    code: 2832,
    city: '兵庫県姫路市'
  });
  amd_address_code.push({
    code: 2833,
    city: '兵庫県宝塚市'
  });
  amd_address_code.push({
    code: 2834,
    city: '兵庫県豊岡市'
  });
  amd_address_code.push({
    code: 2835,
    city: '兵庫県明石市'
  });
  amd_address_code.push({
    code: 2836,
    city: '兵庫県揖保郡'
  });
  amd_address_code.push({
    code: 2837,
    city: '兵庫県養父市'
  });
  amd_address_code.push({
    code: 2900,
    city: '奈良県'
  });
  amd_address_code.push({
    code: 2901,
    city: '奈良県磯城郡'
  });
  amd_address_code.push({
    code: 2902,
    city: '奈良県宇陀郡'
  });
  amd_address_code.push({
    code: 2903,
    city: '奈良県宇陀市'
  });
  amd_address_code.push({
    code: 2904,
    city: '奈良県橿原市'
  });
  amd_address_code.push({
    code: 2905,
    city: '奈良県葛城市'
  });
  amd_address_code.push({
    code: 2906,
    city: '奈良県吉野郡'
  });
  amd_address_code.push({
    code: 2907,
    city: '奈良県五條市'
  });
  amd_address_code.push({
    code: 2908,
    city: '奈良県御所市'
  });
  amd_address_code.push({
    code: 2909,
    city: '奈良県香芝市'
  });
  amd_address_code.push({
    code: 2910,
    city: '奈良県高市郡'
  });
  amd_address_code.push({
    code: 2911,
    city: '奈良県桜井市'
  });
  amd_address_code.push({
    code: 2912,
    city: '奈良県山辺郡'
  });
  amd_address_code.push({
    code: 2913,
    city: '奈良県生駒郡'
  });
  amd_address_code.push({
    code: 2914,
    city: '奈良県生駒市'
  });
  amd_address_code.push({
    code: 2915,
    city: '奈良県大和郡山市'
  });
  amd_address_code.push({
    code: 2916,
    city: '奈良県大和高田市'
  });
  amd_address_code.push({
    code: 2917,
    city: '奈良県天理市'
  });
  amd_address_code.push({
    code: 2918,
    city: '奈良県奈良市'
  });
  amd_address_code.push({
    code: 2919,
    city: '奈良県北葛城郡'
  });
  amd_address_code.push({
    code: 3000,
    city: '和歌山県'
  });
  amd_address_code.push({
    code: 3001,
    city: '和歌山県伊都郡'
  });
  amd_address_code.push({
    code: 3002,
    city: '和歌山県海草郡'
  });
  amd_address_code.push({
    code: 3003,
    city: '和歌山県海南市'
  });
  amd_address_code.push({
    code: 3004,
    city: '和歌山県岩出市'
  });
  amd_address_code.push({
    code: 3005,
    city: '和歌山県紀の川市'
  });
  amd_address_code.push({
    code: 3006,
    city: '和歌山県橋本市'
  });
  amd_address_code.push({
    code: 3007,
    city: '和歌山県御坊市'
  });
  amd_address_code.push({
    code: 3008,
    city: '和歌山県新宮市'
  });
  amd_address_code.push({
    code: 3009,
    city: '和歌山県西牟婁郡'
  });
  amd_address_code.push({
    code: 3010,
    city: '和歌山県田辺市'
  });
  amd_address_code.push({
    code: 3011,
    city: '和歌山県東牟婁郡'
  });
  amd_address_code.push({
    code: 3012,
    city: '和歌山県日高郡'
  });
  amd_address_code.push({
    code: 3013,
    city: '和歌山県有田郡'
  });
  amd_address_code.push({
    code: 3014,
    city: '和歌山県有田市'
  });
  amd_address_code.push({
    code: 3015,
    city: '和歌山県和歌山市'
  });
  amd_address_code.push({
    code: 3100,
    city: '鳥取県'
  });
  amd_address_code.push({
    code: 3101,
    city: '鳥取県岩美郡'
  });
  amd_address_code.push({
    code: 3102,
    city: '鳥取県境港市'
  });
  amd_address_code.push({
    code: 3103,
    city: '鳥取県西伯郡'
  });
  amd_address_code.push({
    code: 3104,
    city: '鳥取県倉吉市'
  });
  amd_address_code.push({
    code: 3105,
    city: '鳥取県鳥取市'
  });
  amd_address_code.push({
    code: 3106,
    city: '鳥取県東伯郡'
  });
  amd_address_code.push({
    code: 3107,
    city: '鳥取県日野郡'
  });
  amd_address_code.push({
    code: 3108,
    city: '鳥取県八頭郡'
  });
  amd_address_code.push({
    code: 3109,
    city: '鳥取県米子市'
  });
  amd_address_code.push({
    code: 3200,
    city: '島根県'
  });
  amd_address_code.push({
    code: 3201,
    city: '島根県安来市'
  });
  amd_address_code.push({
    code: 3202,
    city: '島根県隠岐郡'
  });
  amd_address_code.push({
    code: 3203,
    city: '島根県雲南市'
  });
  amd_address_code.push({
    code: 3204,
    city: '島根県益田市'
  });
  amd_address_code.push({
    code: 3205,
    city: '島根県江津市'
  });
  amd_address_code.push({
    code: 3206,
    city: '島根県鹿足郡'
  });
  amd_address_code.push({
    code: 3207,
    city: '島根県出雲市'
  });
  amd_address_code.push({
    code: 3208,
    city: '島根県松江市'
  });
  amd_address_code.push({
    code: 3209,
    city: '島根県仁多郡'
  });
  amd_address_code.push({
    code: 3210,
    city: '島根県大田市'
  });
  amd_address_code.push({
    code: 3211,
    city: '島根県飯石郡'
  });
  amd_address_code.push({
    code: 3212,
    city: '島根県浜田市'
  });
  amd_address_code.push({
    code: 3213,
    city: '島根県邑智郡'
  });
  amd_address_code.push({
    code: 3300,
    city: '岡山県'
  });
  amd_address_code.push({
    code: 3301,
    city: '岡山県井原市'
  });
  amd_address_code.push({
    code: 3302,
    city: '岡山県英田郡'
  });
  amd_address_code.push({
    code: 3303,
    city: '岡山県加賀郡'
  });
  amd_address_code.push({
    code: 3304,
    city: '岡山県笠岡市'
  });
  amd_address_code.push({
    code: 3305,
    city: '岡山県久米郡'
  });
  amd_address_code.push({
    code: 3306,
    city: '岡山県玉野市'
  });
  amd_address_code.push({
    code: 3307,
    city: '岡山県高梁市'
  });
  amd_address_code.push({
    code: 3308,
    city: '岡山県勝田郡'
  });
  amd_address_code.push({
    code: 3309,
    city: '岡山県小田郡'
  });
  amd_address_code.push({
    code: 3310,
    city: '岡山県新見市'
  });
  amd_address_code.push({
    code: 3311,
    city: '岡山県真庭郡'
  });
  amd_address_code.push({
    code: 3312,
    city: '岡山県真庭市'
  });
  amd_address_code.push({
    code: 3313,
    city: '岡山県瀬戸内市'
  });
  amd_address_code.push({
    code: 3314,
    city: '岡山県赤磐市'
  });
  amd_address_code.push({
    code: 3315,
    city: '岡山県浅口郡'
  });
  amd_address_code.push({
    code: 3316,
    city: '岡山県浅口市'
  });
  amd_address_code.push({
    code: 3317,
    city: '岡山県倉敷市'
  });
  amd_address_code.push({
    code: 3318,
    city: '岡山県総社市'
  });
  amd_address_code.push({
    code: 3319,
    city: '岡山県津山市'
  });
  amd_address_code.push({
    code: 3320,
    city: '岡山県都窪郡'
  });
  amd_address_code.push({
    code: 3321,
    city: '岡山県苫田郡'
  });
  amd_address_code.push({
    code: 3322,
    city: '岡山県備前市'
  });
  amd_address_code.push({
    code: 3323,
    city: '岡山県美作市'
  });
  amd_address_code.push({
    code: 3324,
    city: '岡山県和気郡'
  });
  amd_address_code.push({
    code: 3325,
    city: '岡山県岡山市'
  });
  amd_address_code.push({
    code: 3400,
    city: '広島県'
  });
  amd_address_code.push({
    code: 3401,
    city: '広島県安芸郡'
  });
  amd_address_code.push({
    code: 3402,
    city: '広島県安芸高田市'
  });
  amd_address_code.push({
    code: 3403,
    city: '広島県呉市'
  });
  amd_address_code.push({
    code: 3404,
    city: '広島県広島市'
  });
  amd_address_code.push({
    code: 3405,
    city: '広島県江田島市'
  });
  amd_address_code.push({
    code: 3406,
    city: '広島県三原市'
  });
  amd_address_code.push({
    code: 3407,
    city: '広島県三次市'
  });
  amd_address_code.push({
    code: 3408,
    city: '広島県山県郡'
  });
  amd_address_code.push({
    code: 3409,
    city: '広島県庄原市'
  });
  amd_address_code.push({
    code: 3410,
    city: '広島県神石郡'
  });
  amd_address_code.push({
    code: 3411,
    city: '広島県世羅郡'
  });
  amd_address_code.push({
    code: 3412,
    city: '広島県大竹市'
  });
  amd_address_code.push({
    code: 3413,
    city: '広島県竹原市'
  });
  amd_address_code.push({
    code: 3414,
    city: '広島県東広島市'
  });
  amd_address_code.push({
    code: 3415,
    city: '広島県廿日市市'
  });
  amd_address_code.push({
    code: 3416,
    city: '広島県尾道市'
  });
  amd_address_code.push({
    code: 3417,
    city: '広島県府中市'
  });
  amd_address_code.push({
    code: 3418,
    city: '広島県福山市'
  });
  amd_address_code.push({
    code: 3419,
    city: '広島県豊田郡'
  });
  amd_address_code.push({
    code: 3500,
    city: '山口県'
  });
  amd_address_code.push({
    code: 3501,
    city: '山口県阿武郡'
  });
  amd_address_code.push({
    code: 3502,
    city: '山口県宇部市'
  });
  amd_address_code.push({
    code: 3503,
    city: '山口県下関市'
  });
  amd_address_code.push({
    code: 3504,
    city: '山口県下松市'
  });
  amd_address_code.push({
    code: 3505,
    city: '山口県岩国市'
  });
  amd_address_code.push({
    code: 3506,
    city: '山口県玖珂郡'
  });
  amd_address_code.push({
    code: 3507,
    city: '山口県熊毛郡'
  });
  amd_address_code.push({
    code: 3508,
    city: '山口県光市'
  });
  amd_address_code.push({
    code: 3509,
    city: '山口県山口市'
  });
  amd_address_code.push({
    code: 3510,
    city: '山口県山陽小野田市'
  });
  amd_address_code.push({
    code: 3511,
    city: '山口県周南市'
  });
  amd_address_code.push({
    code: 3512,
    city: '山口県大島郡'
  });
  amd_address_code.push({
    code: 3513,
    city: '山口県長門市'
  });
  amd_address_code.push({
    code: 3514,
    city: '山口県萩市'
  });
  amd_address_code.push({
    code: 3515,
    city: '山口県美祢市'
  });
  amd_address_code.push({
    code: 3516,
    city: '山口県防府市'
  });
  amd_address_code.push({
    code: 3517,
    city: '山口県柳井市'
  });
  amd_address_code.push({
    code: 3600,
    city: '徳島県'
  });
  amd_address_code.push({
    code: 3601,
    city: '徳島県阿南市'
  });
  amd_address_code.push({
    code: 3602,
    city: '徳島県阿波市'
  });
  amd_address_code.push({
    code: 3603,
    city: '徳島県海部郡'
  });
  amd_address_code.push({
    code: 3604,
    city: '徳島県吉野川市'
  });
  amd_address_code.push({
    code: 3605,
    city: '徳島県三好郡'
  });
  amd_address_code.push({
    code: 3606,
    city: '徳島県三好市'
  });
  amd_address_code.push({
    code: 3607,
    city: '徳島県勝浦郡'
  });
  amd_address_code.push({
    code: 3608,
    city: '徳島県小松島市'
  });
  amd_address_code.push({
    code: 3609,
    city: '徳島県徳島市'
  });
  amd_address_code.push({
    code: 3610,
    city: '徳島県那賀郡'
  });
  amd_address_code.push({
    code: 3611,
    city: '徳島県板野郡'
  });
  amd_address_code.push({
    code: 3612,
    city: '徳島県美馬郡'
  });
  amd_address_code.push({
    code: 3613,
    city: '徳島県美馬市'
  });
  amd_address_code.push({
    code: 3614,
    city: '徳島県名西郡'
  });
  amd_address_code.push({
    code: 3615,
    city: '徳島県名東郡'
  });
  amd_address_code.push({
    code: 3616,
    city: '徳島県鳴門市'
  });
  amd_address_code.push({
    code: 3700,
    city: '香川県'
  });
  amd_address_code.push({
    code: 3701,
    city: '香川県さぬき市'
  });
  amd_address_code.push({
    code: 3702,
    city: '香川県綾歌郡'
  });
  amd_address_code.push({
    code: 3703,
    city: '香川県観音寺市'
  });
  amd_address_code.push({
    code: 3704,
    city: '香川県丸亀市'
  });
  amd_address_code.push({
    code: 3705,
    city: '香川県香川郡'
  });
  amd_address_code.push({
    code: 3706,
    city: '香川県高松市'
  });
  amd_address_code.push({
    code: 3707,
    city: '香川県坂出市'
  });
  amd_address_code.push({
    code: 3708,
    city: '香川県三豊市'
  });
  amd_address_code.push({
    code: 3709,
    city: '香川県小豆郡'
  });
  amd_address_code.push({
    code: 3710,
    city: '香川県善通寺市'
  });
  amd_address_code.push({
    code: 3711,
    city: '香川県仲多度郡'
  });
  amd_address_code.push({
    code: 3712,
    city: '香川県東かがわ市'
  });
  amd_address_code.push({
    code: 3713,
    city: '香川県木田郡'
  });
  amd_address_code.push({
    code: 3800,
    city: '愛媛県'
  });
  amd_address_code.push({
    code: 3801,
    city: '愛媛県伊予郡'
  });
  amd_address_code.push({
    code: 3802,
    city: '愛媛県伊予市'
  });
  amd_address_code.push({
    code: 3803,
    city: '愛媛県宇和島市'
  });
  amd_address_code.push({
    code: 3804,
    city: '愛媛県越智郡'
  });
  amd_address_code.push({
    code: 3805,
    city: '愛媛県喜多郡'
  });
  amd_address_code.push({
    code: 3806,
    city: '愛媛県今治市'
  });
  amd_address_code.push({
    code: 3807,
    city: '愛媛県四国中央市'
  });
  amd_address_code.push({
    code: 3808,
    city: '愛媛県松山市'
  });
  amd_address_code.push({
    code: 3809,
    city: '愛媛県上浮穴郡'
  });
  amd_address_code.push({
    code: 3810,
    city: '愛媛県新居浜市'
  });
  amd_address_code.push({
    code: 3811,
    city: '愛媛県西宇和郡'
  });
  amd_address_code.push({
    code: 3812,
    city: '愛媛県西条市'
  });
  amd_address_code.push({
    code: 3813,
    city: '愛媛県西予市'
  });
  amd_address_code.push({
    code: 3814,
    city: '愛媛県大洲市'
  });
  amd_address_code.push({
    code: 3815,
    city: '愛媛県東温市'
  });
  amd_address_code.push({
    code: 3816,
    city: '愛媛県南宇和郡'
  });
  amd_address_code.push({
    code: 3817,
    city: '愛媛県八幡浜市'
  });
  amd_address_code.push({
    code: 3818,
    city: '愛媛県北宇和郡'
  });
  amd_address_code.push({
    code: 3900,
    city: '高知県'
  });
  amd_address_code.push({
    code: 3901,
    city: '高知県安芸郡'
  });
  amd_address_code.push({
    code: 3902,
    city: '高知県安芸市'
  });
  amd_address_code.push({
    code: 3903,
    city: '高知県吾川郡'
  });
  amd_address_code.push({
    code: 3904,
    city: '高知県香南市'
  });
  amd_address_code.push({
    code: 3905,
    city: '高知県香美市'
  });
  amd_address_code.push({
    code: 3906,
    city: '高知県高岡郡'
  });
  amd_address_code.push({
    code: 3907,
    city: '高知県高知市'
  });
  amd_address_code.push({
    code: 3908,
    city: '高知県四万十市'
  });
  amd_address_code.push({
    code: 3909,
    city: '高知県室戸市'
  });
  amd_address_code.push({
    code: 3910,
    city: '高知県宿毛市'
  });
  amd_address_code.push({
    code: 3911,
    city: '高知県須崎市'
  });
  amd_address_code.push({
    code: 3912,
    city: '高知県長岡郡'
  });
  amd_address_code.push({
    code: 3913,
    city: '高知県土佐郡'
  });
  amd_address_code.push({
    code: 3914,
    city: '高知県土佐市'
  });
  amd_address_code.push({
    code: 3915,
    city: '高知県土佐清水市'
  });
  amd_address_code.push({
    code: 3916,
    city: '高知県南国市'
  });
  amd_address_code.push({
    code: 3917,
    city: '高知県幡多郡'
  });
  amd_address_code.push({
    code: 4000,
    city: '福岡県'
  });
  amd_address_code.push({
    code: 4001,
    city: '福岡県うきは市'
  });
  amd_address_code.push({
    code: 4002,
    city: '福岡県みやま市'
  });
  amd_address_code.push({
    code: 4003,
    city: '福岡県鞍手郡'
  });
  amd_address_code.push({
    code: 4004,
    city: '福岡県遠賀郡'
  });
  amd_address_code.push({
    code: 4005,
    city: '福岡県嘉穂郡'
  });
  amd_address_code.push({
    code: 4006,
    city: '福岡県嘉麻市'
  });
  amd_address_code.push({
    code: 4007,
    city: '福岡県久留米市'
  });
  amd_address_code.push({
    code: 4008,
    city: '福岡県宮若市'
  });
  amd_address_code.push({
    code: 4009,
    city: '福岡県京都郡'
  });
  amd_address_code.push({
    code: 4010,
    city: '福岡県古賀市'
  });
  amd_address_code.push({
    code: 4011,
    city: '福岡県行橋市'
  });
  amd_address_code.push({
    code: 4012,
    city: '福岡県三井郡'
  });
  amd_address_code.push({
    code: 4013,
    city: '福岡県三潴郡'
  });
  amd_address_code.push({
    code: 4014,
    city: '福岡県糸島市'
  });
  amd_address_code.push({
    code: 4015,
    city: '福岡県宗像市'
  });
  amd_address_code.push({
    code: 4016,
    city: '福岡県春日市'
  });
  amd_address_code.push({
    code: 4017,
    city: '福岡県小郡市'
  });
  amd_address_code.push({
    code: 4018,
    city: '福岡県糟屋郡'
  });
  amd_address_code.push({
    code: 4019,
    city: '福岡県太宰府市'
  });
  amd_address_code.push({
    code: 4020,
    city: '福岡県大川市'
  });
  amd_address_code.push({
    code: 4021,
    city: '福岡県大牟田市'
  });
  amd_address_code.push({
    code: 4022,
    city: '福岡県大野城市'
  });
  amd_address_code.push({
    code: 4023,
    city: '福岡県築上郡'
  });
  amd_address_code.push({
    code: 4024,
    city: '福岡県筑後市'
  });
  amd_address_code.push({
    code: 4025,
    city: '福岡県筑紫郡'
  });
  amd_address_code.push({
    code: 4026,
    city: '福岡県筑紫野市'
  });
  amd_address_code.push({
    code: 4027,
    city: '福岡県中間市'
  });
  amd_address_code.push({
    code: 4028,
    city: '福岡県朝倉郡'
  });
  amd_address_code.push({
    code: 4029,
    city: '福岡県朝倉市'
  });
  amd_address_code.push({
    code: 4030,
    city: '福岡県直方市'
  });
  amd_address_code.push({
    code: 4031,
    city: '福岡県田川郡'
  });
  amd_address_code.push({
    code: 4032,
    city: '福岡県田川市'
  });
  amd_address_code.push({
    code: 4033,
    city: '福岡県八女郡'
  });
  amd_address_code.push({
    code: 4034,
    city: '福岡県八女市'
  });
  amd_address_code.push({
    code: 4035,
    city: '福岡県飯塚市'
  });
  amd_address_code.push({
    code: 4036,
    city: '福岡県福岡市'
  });
  amd_address_code.push({
    code: 4037,
    city: '福岡県福津市'
  });
  amd_address_code.push({
    code: 4038,
    city: '福岡県豊前市'
  });
  amd_address_code.push({
    code: 4039,
    city: '福岡県北九州市'
  });
  amd_address_code.push({
    code: 4040,
    city: '福岡県柳川市'
  });
  amd_address_code.push({
    code: 4100,
    city: '佐賀県'
  });
  amd_address_code.push({
    code: 4101,
    city: '佐賀県伊万里市'
  });
  amd_address_code.push({
    code: 4102,
    city: '佐賀県嬉野市'
  });
  amd_address_code.push({
    code: 4103,
    city: '佐賀県杵島郡'
  });
  amd_address_code.push({
    code: 4104,
    city: '佐賀県佐賀市'
  });
  amd_address_code.push({
    code: 4105,
    city: '佐賀県三養基郡'
  });
  amd_address_code.push({
    code: 4106,
    city: '佐賀県鹿島市'
  });
  amd_address_code.push({
    code: 4107,
    city: '佐賀県小城市'
  });
  amd_address_code.push({
    code: 4108,
    city: '佐賀県神埼郡'
  });
  amd_address_code.push({
    code: 4109,
    city: '佐賀県神埼市'
  });
  amd_address_code.push({
    code: 4110,
    city: '佐賀県西松浦郡'
  });
  amd_address_code.push({
    code: 4111,
    city: '佐賀県多久市'
  });
  amd_address_code.push({
    code: 4112,
    city: '佐賀県鳥栖市'
  });
  amd_address_code.push({
    code: 4113,
    city: '佐賀県唐津市'
  });
  amd_address_code.push({
    code: 4114,
    city: '佐賀県東松浦郡'
  });
  amd_address_code.push({
    code: 4115,
    city: '佐賀県藤津郡'
  });
  amd_address_code.push({
    code: 4116,
    city: '佐賀県武雄市'
  });
  amd_address_code.push({
    code: 4200,
    city: '長崎県'
  });
  amd_address_code.push({
    code: 4201,
    city: '長崎県壱岐市'
  });
  amd_address_code.push({
    code: 4202,
    city: '長崎県雲仙市'
  });
  amd_address_code.push({
    code: 4203,
    city: '長崎県五島市'
  });
  amd_address_code.push({
    code: 4204,
    city: '長崎県佐世保市'
  });
  amd_address_code.push({
    code: 4205,
    city: '長崎県松浦市'
  });
  amd_address_code.push({
    code: 4206,
    city: '長崎県西海市'
  });
  amd_address_code.push({
    code: 4207,
    city: '長崎県西彼杵郡'
  });
  amd_address_code.push({
    code: 4208,
    city: '長崎県対馬市'
  });
  amd_address_code.push({
    code: 4209,
    city: '長崎県大村市'
  });
  amd_address_code.push({
    code: 4210,
    city: '長崎県長崎市'
  });
  amd_address_code.push({
    code: 4211,
    city: '長崎県島原市'
  });
  amd_address_code.push({
    code: 4212,
    city: '長崎県東彼杵郡'
  });
  amd_address_code.push({
    code: 4213,
    city: '長崎県南松浦郡'
  });
  amd_address_code.push({
    code: 4214,
    city: '長崎県南島原市'
  });
  amd_address_code.push({
    code: 4215,
    city: '長崎県平戸市'
  });
  amd_address_code.push({
    code: 4216,
    city: '長崎県北松浦郡'
  });
  amd_address_code.push({
    code: 4217,
    city: '長崎県諫早市'
  });
  amd_address_code.push({
    code: 4300,
    city: '熊本県'
  });
  amd_address_code.push({
    code: 4301,
    city: '熊本県阿蘇郡'
  });
  amd_address_code.push({
    code: 4302,
    city: '熊本県阿蘇市'
  });
  amd_address_code.push({
    code: 4303,
    city: '熊本県葦北郡'
  });
  amd_address_code.push({
    code: 4304,
    city: '熊本県宇城市'
  });
  amd_address_code.push({
    code: 4305,
    city: '熊本県宇土市'
  });
  amd_address_code.push({
    code: 4306,
    city: '熊本県下益城郡'
  });
  amd_address_code.push({
    code: 4307,
    city: '熊本県菊池郡'
  });
  amd_address_code.push({
    code: 4308,
    city: '熊本県菊池市'
  });
  amd_address_code.push({
    code: 4309,
    city: '熊本県球磨郡'
  });
  amd_address_code.push({
    code: 4310,
    city: '熊本県玉名郡'
  });
  amd_address_code.push({
    code: 4311,
    city: '熊本県玉名市'
  });
  amd_address_code.push({
    code: 4312,
    city: '熊本県熊本市'
  });
  amd_address_code.push({
    code: 4313,
    city: '熊本県荒尾市'
  });
  amd_address_code.push({
    code: 4314,
    city: '熊本県合志市'
  });
  amd_address_code.push({
    code: 4315,
    city: '熊本県山鹿市'
  });
  amd_address_code.push({
    code: 4316,
    city: '熊本県上益城郡'
  });
  amd_address_code.push({
    code: 4317,
    city: '熊本県上天草市'
  });
  amd_address_code.push({
    code: 4318,
    city: '熊本県人吉市'
  });
  amd_address_code.push({
    code: 4319,
    city: '熊本県水俣市'
  });
  amd_address_code.push({
    code: 4320,
    city: '熊本県天草郡'
  });
  amd_address_code.push({
    code: 4321,
    city: '熊本県天草市'
  });
  amd_address_code.push({
    code: 4322,
    city: '熊本県八代郡'
  });
  amd_address_code.push({
    code: 4323,
    city: '熊本県八代市'
  });
  amd_address_code.push({
    code: 4400,
    city: '大分県'
  });
  amd_address_code.push({
    code: 4401,
    city: '大分県宇佐市'
  });
  amd_address_code.push({
    code: 4402,
    city: '大分県臼杵市'
  });
  amd_address_code.push({
    code: 4403,
    city: '大分県杵築市'
  });
  amd_address_code.push({
    code: 4404,
    city: '大分県玖珠郡'
  });
  amd_address_code.push({
    code: 4405,
    city: '大分県国東市'
  });
  amd_address_code.push({
    code: 4406,
    city: '大分県佐伯市'
  });
  amd_address_code.push({
    code: 4407,
    city: '大分県速見郡'
  });
  amd_address_code.push({
    code: 4408,
    city: '大分県大分市'
  });
  amd_address_code.push({
    code: 4409,
    city: '大分県竹田市'
  });
  amd_address_code.push({
    code: 4410,
    city: '大分県中津市'
  });
  amd_address_code.push({
    code: 4411,
    city: '大分県津久見市'
  });
  amd_address_code.push({
    code: 4412,
    city: '大分県東国東郡'
  });
  amd_address_code.push({
    code: 4413,
    city: '大分県日田市'
  });
  amd_address_code.push({
    code: 4414,
    city: '大分県別府市'
  });
  amd_address_code.push({
    code: 4415,
    city: '大分県豊後高田市'
  });
  amd_address_code.push({
    code: 4416,
    city: '大分県豊後大野市'
  });
  amd_address_code.push({
    code: 4417,
    city: '大分県由布市'
  });
  amd_address_code.push({
    code: 4500,
    city: '宮崎県'
  });
  amd_address_code.push({
    code: 4501,
    city: '宮崎県えびの市'
  });
  amd_address_code.push({
    code: 4502,
    city: '宮崎県延岡市'
  });
  amd_address_code.push({
    code: 4503,
    city: '宮崎県宮崎市'
  });
  amd_address_code.push({
    code: 4504,
    city: '宮崎県串間市'
  });
  amd_address_code.push({
    code: 4505,
    city: '宮崎県児湯郡'
  });
  amd_address_code.push({
    code: 4506,
    city: '宮崎県小林市'
  });
  amd_address_code.push({
    code: 4507,
    city: '宮崎県西臼杵郡'
  });
  amd_address_code.push({
    code: 4508,
    city: '宮崎県西諸県郡'
  });
  amd_address_code.push({
    code: 4509,
    city: '宮崎県西都市'
  });
  amd_address_code.push({
    code: 4510,
    city: '宮崎県都城市'
  });
  amd_address_code.push({
    code: 4511,
    city: '宮崎県東臼杵郡'
  });
  amd_address_code.push({
    code: 4512,
    city: '宮崎県東諸県郡'
  });
  amd_address_code.push({
    code: 4513,
    city: '宮崎県日向市'
  });
  amd_address_code.push({
    code: 4514,
    city: '宮崎県日南市'
  });
  amd_address_code.push({
    code: 4515,
    city: '宮崎県北諸県郡'
  });
  amd_address_code.push({
    code: 4600,
    city: '鹿児島県'
  });
  amd_address_code.push({
    code: 4601,
    city: '鹿児島県阿久根市'
  });
  amd_address_code.push({
    code: 4602,
    city: '鹿児島県姶良郡'
  });
  amd_address_code.push({
    code: 4603,
    city: '鹿児島県姶良市'
  });
  amd_address_code.push({
    code: 4604,
    city: '鹿児島県伊佐市'
  });
  amd_address_code.push({
    code: 4605,
    city: '鹿児島県奄美市'
  });
  amd_address_code.push({
    code: 4606,
    city: '鹿児島県肝属郡'
  });
  amd_address_code.push({
    code: 4607,
    city: '鹿児島県熊毛郡'
  });
  amd_address_code.push({
    code: 4608,
    city: '鹿児島県薩摩郡'
  });
  amd_address_code.push({
    code: 4609,
    city: '鹿児島県薩摩川内市'
  });
  amd_address_code.push({
    code: 4610,
    city: '鹿児島県志布志市'
  });
  amd_address_code.push({
    code: 4611,
    city: '鹿児島県指宿市'
  });
  amd_address_code.push({
    code: 4612,
    city: '鹿児島県鹿屋市'
  });
  amd_address_code.push({
    code: 4613,
    city: '鹿児島県鹿児島郡'
  });
  amd_address_code.push({
    code: 4614,
    city: '鹿児島県鹿児島市'
  });
  amd_address_code.push({
    code: 4615,
    city: '鹿児島県出水郡'
  });
  amd_address_code.push({
    code: 4616,
    city: '鹿児島県出水市'
  });
  amd_address_code.push({
    code: 4617,
    city: '鹿児島県垂水市'
  });
  amd_address_code.push({
    code: 4618,
    city: '鹿児島県西之表市'
  });
  amd_address_code.push({
    code: 4619,
    city: '鹿児島県曽於郡'
  });
  amd_address_code.push({
    code: 4620,
    city: '鹿児島県曽於市'
  });
  amd_address_code.push({
    code: 4621,
    city: '鹿児島県大島郡'
  });
  amd_address_code.push({
    code: 4622,
    city: '鹿児島県南さつま市'
  });
  amd_address_code.push({
    code: 4623,
    city: '鹿児島県南九州市'
  });
  amd_address_code.push({
    code: 4624,
    city: '鹿児島県日置市'
  });
  amd_address_code.push({
    code: 4625,
    city: '鹿児島県枕崎市'
  });
  amd_address_code.push({
    code: 4626,
    city: '鹿児島県霧島市'
  });
  amd_address_code.push({
    code: 4627,
    city: '鹿児島県いちき串木野'
  });
  amd_address_code.push({
    code: 4700,
    city: '沖縄県'
  });
  amd_address_code.push({
    code: 4701,
    city: '沖縄県うるま市'
  });
  amd_address_code.push({
    code: 4702,
    city: '沖縄県浦添市'
  });
  amd_address_code.push({
    code: 4703,
    city: '沖縄県沖縄市'
  });
  amd_address_code.push({
    code: 4704,
    city: '沖縄県宜野湾市'
  });
  amd_address_code.push({
    code: 4705,
    city: '沖縄県宮古郡'
  });
  amd_address_code.push({
    code: 4706,
    city: '沖縄県宮古島市'
  });
  amd_address_code.push({
    code: 4707,
    city: '沖縄県国頭郡'
  });
  amd_address_code.push({
    code: 4708,
    city: '沖縄県糸満市'
  });
  amd_address_code.push({
    code: 4709,
    city: '沖縄県石垣市'
  });
  amd_address_code.push({
    code: 4710,
    city: '沖縄県中頭郡'
  });
  amd_address_code.push({
    code: 4711,
    city: '沖縄県島尻郡'
  });
  amd_address_code.push({
    code: 4712,
    city: '沖縄県那覇市'
  });
  amd_address_code.push({
    code: 4713,
    city: '沖縄県南城市'
  });
  amd_address_code.push({
    code: 4714,
    city: '沖縄県八重山郡'
  });
  amd_address_code.push({
    code: 4715,
    city: '沖縄県豊見城市'
  });
  amd_address_code.push({
    code: 4716,
    city: '沖縄県名護市'
  });
});
