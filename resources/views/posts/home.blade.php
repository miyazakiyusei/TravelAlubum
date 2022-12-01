<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>トラベルアルバム</title>
        <link href="/css/map.css" rel="stylesheet" type="text/css">
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='title'>
           <h1>トラベルアルバム</h1>
            <a href='/posts/create'>投稿</a>
            <a href='/posts/comment'>コメント投稿</a>
        </div>
        <div id="japan-map" class="clearfix">

            <div id="hokkaido-touhoku" class="clearfix">
            	<p class="area-title">北海道・東北</p>
            	<div class="area">
            		<a href="/posts/prefecture/1">
                    	<div id="hokkaido">
                    		<p>北海道</p>
                      	</div>
            		</a>
            		<a href="/posts/prefecture/2">
            			<div id="aomori">
            				<p>青森</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/3">
            			<div id="akita">
            				<p>秋田</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/4">
            			<div id="iwate">
            				<p>岩手</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/5">
            			<div id="yamagata">
            				<p>山形</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/6">
            			<div id="miyagi">
            				<p>宮城</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/7">
            			<div id="fukushima">
            				<p>福島</p>
            			</div>
            		</a>
            	</div>
            </div>
            
            <div id="kantou">
            	<p class="area-title">関東</p>
            	<div class="area">
            		<a href="/posts/prefecture/8">
            			<div id="gunma">
            				<p>群馬</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/9">
            			<div id="tochigi">
            				<p>栃木</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/10">
            			<div id="ibaraki">
            				<p>茨城</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/11">
            			<div id="saitama">
            				<p>埼玉</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/12">
            			<div id="chiba">
            				<p>千葉</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/13">
            			<div id="tokyo">
            				<p>東京</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/14">
            			<div id="kanagawa">
            				<p>神奈川</p>
            			</div>
            		</a>
            	</div>
            </div>
            
            <div id="tyubu" class="clearfix">
            	<p class="area-title">中部</p>
            	<div class="area">
            		<a href="/posts/prefecture/15">
            			<div id="nigata">
            				<p>新潟</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/16">
            			<div id="toyama">
            				<p>富山</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/17">
            			<div id="ishikawa">
            				<p>石川</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/18">
            			<div id="fukui">
            				<p>福井</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/19">
            			<div id="nagano">
            				<p>長野</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/20">
            			<div id="gifu">
            				<p>岐阜</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/21">
            			<div id="yamanashi">
            				<p>山梨</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/22">
            			<div id="aichi">
            				<p>愛知</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/23">
            			<div id="shizuoka">
            				<p>静岡</p>
            			</div>
            		</a>
            	</div>
            </div>
            
            <div id="kinki" class="clearfix">
            	<p class="area-title">近畿</p>
            	<div class="area">
            		<a href="/posts/prefecture/24">
            			<div id="kyoto">
            				<p>京都</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/25">
            			<div id="shiga">
            				<p>滋賀</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/26">
            			<div id="osaka">
            				<p>大阪</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/27">
            			<div id="nara">
            				<p>奈良</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/28">
            			<div id="mie">
            				<p>三重</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/29">
            			<div id="wakayama">
            				<p>和歌山</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/30">
            			<div id="hyougo">
            				<p>兵庫</p>
            			</div>
            		</a>
            	</div>
            </div>
            
            <div id="tyugoku" class="clearfix">
            	<p class="area-title">中国</p>
            	<div class="area">
            		<a href="/posts/prefecture/31">
            			<div id="tottori">
            				<p>鳥取</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/32">
            			<div id="okayama">
            				<p>岡山</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/33">
            			<div id="shimane">
            				<p>島根</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/34">
            			<div id="hiroshima">
            				<p>広島</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/35">
            			<div id="yamaguchi">
            				<p>山口</p>
            			</div>
            		</a>
            	</div>
            </div>
            
            <div id="shikoku" class="clearfix">
            	<p class="area-title">四国</p>
            	<div class="area">
            		<a href="/posts/prefecture/36">
            			<div id="kagawa">
            				<p>香川</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/37">
            			<div id="ehime">
            				<p>愛媛</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/38">
            			<div id="tokushima">
            				<p>徳島</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/39">
            			<div id="kouchi">
            				<p>高知</p>
            			</div>
            		</a>
            	</div>
            </div>
            
            <div id="kyusyu" class="clearfix">
            	<p class="area-title">九州・沖縄</p>
            	<div class="area">
            		<a href="/posts/prefecture/40">
            			<div id="fukuoka">
            				<p>福岡</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/41">
            			<div id="saga">
            				<p>佐賀</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/42">
            			<div id="nagasaki">
            				<p>長崎</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/43">
            			<div id="oita">
            				<p>大分</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/44">
            			<div id="kumamoto">
            				<p>熊本</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/45">
            			<div id="miyazaki">
            				<p>宮崎</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/46">
            			<div id="kagoshima">
            				<p>鹿児島</p>
            			</div>
            		</a>
            		<a href="/posts/prefecture/47">
            			<div id="okinawa">
            				<p>沖縄</p>
            			</div>
            		</a>
            	</div>
            </div>
        </div> <!-- japan-map -->
        <div id="prefecture_image" class="clearfix">
            <div id="kantou-image" class="clearfix">
                <p class="area-title">関東</p>
                <div class="area-image">
                    <a href="/posts/prefecture/13">
                        <div id="tokyo-image">
                            <p>東京</p>
                        </div>
                    </a>
                </div>
            </div>
            <div id="kyusyu-image" class="clearfix">
                <p class="area-title">九州</p>
                <div class="area-image">
                    <a href="/posts/prefecture/46">
                        <div id="kagoshima-image">
                            <p>鹿児島</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="timeline" class="clearfix">
            <p1 class="timeline-title">タイムライン</p1>
                <a href="/posts/timeline">
                    <p2>コメント一覧</p2>
                </a>
        </div>
    </body>
</html>