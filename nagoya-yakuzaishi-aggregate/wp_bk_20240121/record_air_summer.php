<?php
/*
Template Name: 教室の夏季空気検査表
*/
?>

<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<div class="topicPath">
		<div class="inner">
			<ol>
				<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li><a href="<?php echo home_url(); ?>/record_list/">検査表の記入 一覧</a></li>
				<li>教室の夏季空気検査表</li>
			</ol>
			<div class="userBox">
				<p>ようこそ 会員さん</p>
			</div>
		</div>
	</div>
	<main class="registRecordMain" id="registAir">
		<h2>教室の夏季空気検査表</h2>
		<div class="formBox">
			<div class="wardBox">
				<dl class="inputItem">
					<dt>区選択</dt>
					<dd>
						<div class="selectBox">
							<select class="select_ward" id="air_summer_ward">
								<option value="">選択してください</option>
								<option value="千種">千種</option>
								<option value="東">東</option>
								<option value="北">北</option>
								<option value="西">西</option>
								<option value="中村">中村</option>
								<option value="中">中</option>
								<option value="昭和">昭和</option>
								<option value="瑞穂">瑞穂</option>
								<option value="熱田">熱田</option>
								<option value="中川">中川</option>
								<option value="港">港</option>
								<option value="南">南</option>
								<option value="守山">守山</option>
								<option value="緑">緑</option>
								<option value="名東">名東</option>
								<option value="天白">天白</option>
							</select>
						</div><span class="inputSubTxt">区</span>
						<input type="hidden" id="air_summer_ward_id">
					</dd>
				</dl>
			</div>
			<div class="schoolInfoBox">
				<div class="inputItemList">
					<dl class="inputItem">
						<dt>学校名</dt>
						<dd>
							<div class="selectBox">
								<select class="select_school" id="air_summer_school_name">
									<option value="">選択してください</option>
								</select>
							</div>
							<input type="hidden" id="air_summer_school_type">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>校長名</dt>
						<dd>
							<input type="text" id="air_summer_school_headmaster">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>学校薬剤師名</dt>
						<dd>
							<input type="text" placeholder="※必須項目" id="air_summer_pharmacist">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>検査日時</dt>
						<dd class="selectDate">
							<div class="selectBox year">
								<select id="air_summer_date_year">
									<option value="">選択</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>
									<option value="2028">2028</option>
									<option value="2029">2029</option>
									<option value="2030">2030</option>
									<option value="2031">2031</option>
									<option value="2032">2032</option>
									<option value="2033">2033</option>
									<option value="2034">2034</option>
									<option value="2035">2035</option>
									<option value="2036">2036</option>
									<option value="2037">2037</option>
									<option value="2038">2038</option>
									<option value="2039">2039</option>
									<option value="2040">2040</option>
								</select>
							</div><span class="inputSubTxt">年</span>
							<div class="selectBox month">
								<select id="air_summer_date_month">
									<option value="">選択</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div><span class="inputSubTxt">月</span>
							<div class="selectBox day">
								<select id="air_summer_date_day">
									<option value="">選択</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</div><span class="inputSubTxt">日</span>
							<div class="selectBox yobi">
								<select id="air_summer_date_yobi">
									<option value="">選択</option>
									<option value="月">月</option>
									<option value="火">火</option>
									<option value="水">水</option>
									<option value="木">木</option>
									<option value="金">金</option>
									<option value="土">土</option>
									<option value="日">日</option>
								</select>
							</div><span class="inputSubTxt">曜日</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>時刻</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="air_summer_ampm_rd" value="am" id="air_summer_ampm_01">
									<label for="air_summer_ampm_01">AM</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="air_summer_ampm_rd" value="pm" id="air_summer_ampm_02">
									<label for="air_summer_ampm_02">PM</label>
								</li>
							</ul>
							<input class="unitTime" type="text" id="air_summer_time_text">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>天候</dt>
						<dd>
							<div class="selectBox">
								<select id="air_summer_weather">
									<option>選択してください</option>
									<option>晴</option>
									<option>曇</option>
									<option>雨</option>
								</select>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>風向</dt>
						<dd>
							<div class="selectBox">
								<select id="air_summer_wind_direction">
									<option value="">選択してください</option>
									<option value="北">北</option>
									<option value="北東">北東</option>
									<option value="東">東</option>
									<option value="南東">南東</option>
									<option value="南">南</option>
									<option value="南西">南西</option>
									<option value="西">西</option>
									<option value="北西">北西</option>
								</select>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>風速</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_wind_speed"><span class="inputSubTxt">m/s</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>教室名</dt>
						<dd>
							<input class="unitRoom" type="text" id="air_summer_grade"><span class="inputSubTxt">年</span>
							<input class="unitRoom" type="text" id="air_summer_class"><span class="inputSubTxt">組</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>測定位置</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_position_floor"><span class="inputSubTxt">階</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>教室の大きさ(気積)</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_size"><span class="inputSubTxt">㎥</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>冷房の種類</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="air_summer_air_conditioner_type_rd" value="電気" id="air_summer_air_conditioner_type_01">
									<label for="air_summer_air_conditioner_type_01">電気</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="air_summer_air_conditioner_type_rd" value="ガス" id="air_summer_air_conditioner_type_02">
									<label for="air_summer_air_conditioner_type_02">ガス</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>エアコン</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="air_summer_air_conditioner_use_rd" value="使用中" id="air_summer_air_conditioner_use_01">
									<label for="air_summer_air_conditioner_use_01">使用中</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="air_summer_air_conditioner_use_rd" value="未使用" id="air_summer_air_conditioner_use_02">
									<label for="air_summer_air_conditioner_use_02">未使用</label>
								</li>
							</ul>
						</dd>
					</dl>
				</div>
			</div>
			<div class="airBox01 airBox">
				<div class="inputItemList">
					<dl class="inputItem">
						<dt>生徒</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_student"><span class="inputSubTxt">名</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>職員</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_staff"><span class="inputSubTxt">名</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>検査員</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_inspector"><span class="inputSubTxt">名</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>合計</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_total_people"><span class="inputSubTxt">名</span>
						</dd>
					</dl>
				</div>
			</div>
			<div class="airBox02 airBox">
				<div class="inputItemList">
					<dl class="inputItem">
						<dt>室内温度(30分後)</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_temperature_room"><span class="inputSubTxt">℃</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>外気温度</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_temperature_outside"><span class="inputSubTxt">℃</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>室内と外気の温度差</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_temperature_difference"><span class="inputSubTxt">℃</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>室内湿度(30分後)</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_humidity_room"><span class="inputSubTxt">%</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>外気湿度</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_humidity_outside"><span class="inputSubTxt">%</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>教室内気流</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_air_flow_room"><span class="inputSubTxt">m/s</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>廊下気流</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_air_flow_corridor"><span class="inputSubTxt">m/s</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>二酸化炭素(始業時)</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_co2_1"><span class="inputSubTxt">ppm</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>二酸化炭素(15分後)</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_co2_2"><span class="inputSubTxt">ppm</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>二酸化炭素(30分後)</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_co2_3"><span class="inputSubTxt">ppm</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>二酸化炭素(終業時)</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_co2_4"><span class="inputSubTxt">ppm</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>じんあい(数回の平均)</dt>
						<dd>
							<input class="unit" type="text" id="air_summer_dust"><span class="inputSubTxt">mg/ ㎥</span>
						</dd>
					</dl>
				</div>
				<aside>
					<p>平成29年度に基準値の1/2以下であったため省略。</p>
				</aside>
			</div>
			<div class="attentionBox">
				<div class="left">
					<h3>測定場所及び記入上の注意</h3>
					<ul>
						<li>温度、湿度は教室の中央で30分後に測定すること。</li>
						<li>気流、じんあい、二酸化炭素は教室のほぼ中央で測定すること。</li>
						<li>じんあいはデジタル粉塵計で数回測定してその平均を記入すること。</li>
						<li>二酸化炭素が基準以上にならぬように、窓及び欄間を適当に開放すること。</li>
						<li>検査人員は1-2名とし3名以上教室に入らぬこと。</li>
						<li>指導・助言したことがあれば下記へ記入すること。</li>
						<li>1部は本人の控、1部は学校の控、1部は集計用に事務局に提出すること。</li>
					</ul>
				</div>
				<div class="right">
					<h3>判定基準</h3>
					<dl>
						<dt>温度</dt>
						<dd>18°C以上、28°C以下であることが望ましい。</dd>
					</dl>
					<dl>
						<dt>湿度</dt>
						<dd>30%以上、80%以下であることが望ましい。</dd>
					</dl>
					<dl>
						<dt>二酸化炭素</dt>
						<dd>1500ppm以下であることが望ましい</dd>
					</dl>
					<dl>
						<dt>じんあい</dt>
						<dd>0.10mg/ ㎥以下が望ましい。</dd>
					</dl>
					<dl>
						<dt>気流</dt>
						<dd>毎秒0.5m/s以下が望ましい。</dd>
					</dl>
				</div>
			</div>
			<p class="ttlCoaching">指導・助言</p>
			<textarea id="air_summer_coaching"></textarea>
		</div>
		<div class="btnListBox">
			<button class="btnSubmit">登録する</button>
		</div>
		<?php echo do_shortcode('[wpuf_form id="616"]'); ?>
	</main>
	<!-- △メイン△-->
	<script>
		$(document).ready(function() {

			setSchoolSelect('air_summer_ward', 'air_summer_ward_id', 'air_summer_school_type');
			
			let today = new Date();
			let year = today.getFullYear();
			let month = today.getMonth() + 1;
			let day = today.getDate();
			let title = '教室の夏季空気検査表';
			let ward,
				school;

			$('#category').val('5');

			$('.btnSubmit').on('click', function() {
				if(!$('.select_ward').val() || !$('.select_school').val() || !$('#air_summer_pharmacist').val()) {
					alert('必須項目が未入力です');
					return
				}
				ward = $('#air_summer_ward').val();
				school = $('#air_summer_school_name').val();
				title += '[' + ward + '区]';
				title += '[' + school + ']';
				title += '[' + year + '年' + month + '月' + day + '日' + ']';

				$('#post_title_616').val(title);

				$('.formBox input[type="text"], .formBox select, .formBox textarea, .formBox input[type="hidden"]').each(function(index, element) {
					let id = $(element).attr('id');
					$('#' + id + '_616').val($(element).val());
				});

				$('.formBox input[type="radio"]:checked').each(function(index, element) {
					let name = $(element).attr('name').slice(0, -3);
					$("input[name='" + name + "'][value='" + $(element).val() + "']").prop('checked', true);
				});
				$('.wpuf-submit-button').click();
			});
		});
	</script>
<?php get_footer(); ?>