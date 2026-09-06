<main class="registRecordMain registPostMain" id="registAir">
	<h2>教室の空気定期検査表(冬季)</h2>
	<div class="formBox confirmPostBox">
		<div class="sealBox">
			<p>名古屋市薬剤師会</p>
			<div class="sealTbl">
				<dl>
					<dt>確認者氏名</dt>
					<dd>&nbsp;</dd>
				</dl>
				<dl>
					<dt>印</dt>
					<dd>&nbsp;</dd>
				</dl>
			</div>
		</div>
		<div class="wardBox">
			<dl class="inputItem">
				<dt>区選択</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('air_winter_ward'); ?>
					</div>
					<span class="inputSubTxt">区</span>
				</dd>
			</dl>
		</div>
		<div class="schoolInfoBox">
			<div class="inputItemList">
				<dl class="inputItem">
					<dt>学校名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_school_name'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>校長名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_school_headmaster'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>学校薬剤師名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_pharmacist'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査日時</dt>
					<dd class="selectDate txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_date_year'); ?>
						</div>
						<span class="inputSubTxt">年</span>
						<div class="txtField">
							<?php the_field('air_winter_date_month'); ?>
						</div>
						<span class="inputSubTxt">月</span>
						<div class="txtField">
							<?php the_field('air_winter_date_day'); ?>
						</div>
						<span class="inputSubTxt">日</span>
						<div class="txtField">
							<?php the_field('air_winter_date_yobi'); ?>
						</div>
						<span class="inputSubTxt">曜日</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>時刻</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php $radiofiled_air_winter_ampm = get_field('air_winter_ampm'); echo($radiofiled_air_winter_ampm); ?>
						</div>
						<div class="txtField">
							<?php the_field('air_winter_time_text'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>天候</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_weather'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>風向</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_wind_direction'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>風速</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_wind_speed'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>教室名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_grade'); ?>
						</div>
						<span class="inputSubTxt">年</span>
						<div class="txtField">
							<?php the_field('air_winter_class'); ?>
						</div>
						<span class="inputSubTxt">組</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>測定位置</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_position_floor'); ?>
						</div>
						<span class="inputSubTxt">階</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>教室の大きさ(気積)</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_size'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>暖房の種類</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php $radiofiled_air_winter_heating_type = get_field('air_winter_heating_type'); echo($radiofiled_air_winter_heating_type); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>暖房</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php $radiofiled_air_winter_heating_use = get_field('air_winter_heating_use'); echo($radiofiled_air_winter_heating_use); ?>
						</div>
					</dd>
				</dl>
			</div>
		</div>
		<div class="airBox01 airBox">
			<div class="inputItemList">
				<dl class="inputItem">
					<dt>生徒</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_student'); ?>
						</div>
						<span class="inputSubTxt">名</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>職員</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_staff'); ?>
						</div>
						<span class="inputSubTxt">名</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査員</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_inspector'); ?>
						</div>
						<span class="inputSubTxt">名</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>合計</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_total_people'); ?>
						</div>
						<span class="inputSubTxt">名</span>
					</dd>
				</dl>
			</div>
		</div>
		<div class="airBox02 airBox">
			<div class="inputItemList">
				<dl class="inputItem">
					<dt>室内温度(30分後)</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_temperature_room'); ?>
						</div>
						<span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>外気温度</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_temperature_outside'); ?>
						</div>
						<span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>室内と外気の温度差</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_temperature_difference'); ?>
						</div>
						<span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>室内湿度(30分後)</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_humidity_room'); ?>
						</div>
						<span class="inputSubTxt">%</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>外気湿度</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_humidity_outside'); ?>
						</div>
						<span class="inputSubTxt">%</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>教室内気流</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_air_flow_room'); ?>
						</div>
						<span class="inputSubTxt">m/s</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>廊下気流</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_air_flow_corridor'); ?>
						</div>
						<span class="inputSubTxt">m/s</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>一酸化炭素(25分後)</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_co'); ?>
						</div>
						<span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>二酸化炭素(始業時)</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_co2_1'); ?>
						</div>
						<span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>二酸化炭素(15分後)</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_co2_2'); ?>
						</div>
						<span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>二酸化炭素(30分後)</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_co2_3'); ?>
						</div>
						<span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>二酸化炭素(終業時)</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_co2_4'); ?>
						</div>
						<span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>浮遊粉じん</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_dust'); ?>
						</div>
						<span class="inputSubTxt">mg/ ㎥</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>二酸化室素(室内)</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('air_winter_no2_room'); ?>
						</div>
						<span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
			</div>
			<aside class="winter">
				<p>年度に基準値の1/2以下であったため省略。</p>
			</aside>
		</div>
		<div class="attentionBox">
			<div class="left">
				<h3>測定場所及び記入上の注意</h3>
				<ul>
					<li>温度、湿度は教室の中央で 30 分後に測定すること。</li>
					<li>気流、じんあい、二酸化炭素は教室のほぼ中央で測定すること。</li>
					<li>じんあいはデジタル粉塵計で数回測定してその平均を記入すること。</li>
					<li>二酸化炭素が基準以上にならぬように、窓及び欄間を適当に開放すること。</li>
					<li>検査人員は1-2名とし3名以上教室に入らぬこと。</li>
					<li>指導・助言したことがあれば下記へ記入すること。</li>
					<li>1部は本人の控、 1部は学校の控、1部は集計用に事務局に提出すること。</li>
				</ul>
			</div>
			<div class="right">
				<h3>判定基準</h3>
				<dl>
					<dt>温度</dt>
					<dd>17°C 以上、28°C 以下であることが望ましい。</dd>
				</dl>
				<dl>
					<dt>湿度</dt>
					<dd>30% 以上、80% 以下であることが望ましい。</dd>
				</dl>
				<dl>
					<dt>二酸化炭素</dt>
					<dd>1500ppm 以下であることが望ましい</dd>
				</dl>
				<dl>
					<dt>じんあい</dt>
					<dd>0.10mg/ ㎥ 以下が望ましい。</dd>
				</dl>
				<dl>
					<dt>気流</dt>
					<dd>毎秒 0.5m/s 以下が望ましい。</dd>
				</dl>
			</div>
		</div>
		<p class="ttlCoaching">指導・助言</p>
		<textarea disabled><?php the_field('air_winter_coaching'); ?></textarea>
	</div>
	<div class="formBox editPostBox">
		<div class="wardBox">
			<dl class="inputItem">
				<dt>区選択</dt>
				<dd>
					<div class="selectBox">
						<select class="select_ward" id="air_winter_ward">
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
					<input type="hidden" id="air_winter_ward_id">
				</dd>
			</dl>
		</div>
		<div class="schoolInfoBox">
			<div class="inputItemList">
				<dl class="inputItem">
					<dt>学校名</dt>
					<dd>
						<div class="selectBox">
							<select class="select_school" id="air_winter_school_name">
								<option value="">選択してください</option>
							</select>
						</div>
						<input type="hidden" id="air_winter_school_type">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>校長名</dt>
					<dd>
						<input type="text" id="air_winter_school_headmaster">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>学校薬剤師名</dt>
					<dd>
						<input type="text" placeholder="※必須項目" id="air_winter_pharmacist">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査日時</dt>
					<dd class="selectDate">
						<div class="selectBox year">
							<select id="air_winter_date_year">
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
							<select id="air_winter_date_month">
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
							<select id="air_winter_date_day">
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
							<select id="air_winter_date_yobi">
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
								<input type="radio" name="air_winter_ampm_rd" value="am" id="air_winter_ampm_01">
								<label for="air_winter_ampm_01">AM</label>
							</li>
							<li class="redioBtn">
								<input type="radio" name="air_winter_ampm_rd" value="pm" id="air_winter_ampm_02">
								<label for="air_winter_ampm_02">PM</label>
							</li>
						</ul>
						<input class="unitTime" type="text" id="air_winter_time_text">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>天候</dt>
					<dd>
						<div class="selectBox">
							<select id="air_winter_weather">
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
							<select id="air_winter_wind_direction">
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
						<input class="unit" type="text" id="air_winter_wind_speed"><span class="inputSubTxt">m/s</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>教室名</dt>
					<dd>
						<input class="unitRoom" type="text" id="air_winter_grade"><span class="inputSubTxt">年</span>
						<input class="unitRoom" type="text" id="air_winter_class"><span class="inputSubTxt">組</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>測定位置</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_position_floor"><span class="inputSubTxt">階</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>教室の大きさ(気積)</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_size"><span class="inputSubTxt">?</span>
					</dd>
				</dl>
				<dl class="inputItem heating">
					<dt>暖房の種類</dt>
					<dd>
						<ul class="radioList">
							<li class="redioBtn">
								<input type="radio" name="air_winter_heating_type_rd" value="開放型暖房機" id="air_winter_heating_type_01">
								<label for="air_winter_heating_type_01">開放型暖房機</label>
							</li>
							<li class="redioBtn">
								<input type="radio" name="air_winter_heating_type_rd" value="密閉型暖房" id="air_winter_heating_type_02">
								<label for="air_winter_heating_type_02">密閉型暖房</label>
							</li>
							<li class="redioBtn">
								<input type="radio" name="air_winter_heating_type_rd" value="エアコン" id="air_winter_heating_type_03">
								<label for="air_winter_heating_type_03">エアコン</label>
							</li>
							<li class="redioBtn">
								<input type="radio" name="air_winter_heating_type_rd" value="その他" id="air_winter_heating_type_04">
								<label for="air_winter_heating_type_04">その他</label>
							</li>
							<li class="redioBtn">
								<input type="radio" name="air_winter_heating_type_rd" value="暖房がない" id="air_winter_heating_type_05">
								<label for="air_winter_heating_type_05">暖房がない</label>
							</li>
						</ul>
					</dd>
				</dl>
				<dl class="inputItem heating">
					<dt>暖房は</dt>
					<dd>
						<ul class="radioList">
							<li class="redioBtn">
								<input type="radio" name="air_winter_heating_use_rd" value="使用中" id="air_winter_heating_use_01">
								<label for="air_winter_heating_use_01">使用中</label>
							</li>
							<li class="redioBtn">
								<input type="radio" name="air_winter_heating_use_rd" value="未使用" id="air_winter_heating_use_02">
								<label for="air_winter_heating_use_02">未使用</label>
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
						<input class="unit" type="text" id="air_winter_student"><span class="inputSubTxt">名</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>職員</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_staff"><span class="inputSubTxt">名</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査員</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_inspector"><span class="inputSubTxt">名</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>合計</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_total_people"><span class="inputSubTxt">名</span>
					</dd>
				</dl>
			</div>
		</div>
		<div class="airBox02 airBox">
			<div class="inputItemList">
				<dl class="inputItem">
					<dt>室内温度(30分後)</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_temperature_room"><span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>外気温度</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_temperature_outside"><span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>室内と外気の温度差</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_temperature_difference"><span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>室内湿度(30分後)</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_humidity_room"><span class="inputSubTxt">%</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>外気湿度</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_humidity_outside"><span class="inputSubTxt">%</span>
					</dd>
				</dl>
			</div>
			<div class="inputItemList">
				<dl class="inputItem">
					<dt>教室内気流</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_air_flow_room"><span class="inputSubTxt">m/s</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>廊下気流</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_air_flow_corridor"><span class="inputSubTxt">m/s</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>一酸化炭素(25分後)</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_co"><span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>二酸化炭素(始業時)</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_co2_1"><span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>二酸化炭素(15分後)</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_co2_2"><span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>二酸化炭素(30分後)</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_co2_3"><span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>二酸化炭素(終業時)</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_co2_4"><span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>浮遊粉じん</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_dust"><span class="inputSubTxt">mg/ ㎥</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>二酸化室素(室内)</dt>
					<dd>
						<input class="unit" type="text" id="air_winter_no2_room"><span class="inputSubTxt">ppm</span>
					</dd>
				</dl>
			</div>
			<div class="inputItemList">
				<div class="inputItem">
					<p>浮遊粉じんは年度に基準値の1/2 以下であっため省略。</p>
				</div>
			</div>
		</div>
		<div class="attentionBox">
			<div class="left">
				<h3>記入上の注意</h3>
				<ul>
					<li>温度、相対湿度は教室の中央で30分後に測定すること。</li>
					<li>気流、じんあい、二酸化炭素は教室のほぼ中央で測定すること。</li>
					<li>一酸化炭素は暖房機の間近な生徒の机上で測定すること。</li>
					<li>浮遊粉じんはデジタル粉じん計で数回沢1定してその平均を記入すること。</li>
					<li>二酸化炭素が基準以上にならぬように、窓及び欄間を適当に関放すること。</li>
					<li>検査人員は1～2名とし3名以上教室に入らぬこと。</li>
					<li>指導・助言したことがあれば下記へ記入すること。</li>
					<li>1部は本人の控、1部は学校の控、1部は集計用に支部長に提出すること。</li>
				</ul>
			</div>
			<div class="right">
				<h3>曖房の種類について</h3>
				<dl>
					<dt>開放型暖房機</dt>
					<dd>1石油ストープ、ガスストーブ、ファンヒータ―など。室内の空気を使って燃焼し、排気ガス幸)室内に出す暖房機。わが国では最も一般的である。</dd>
				</dl>
				<dl>
					<dt>密閉型暖房機</dt>
					<dd>3FF式温風暖房機など。屋外の空気を吸って燃焼し、排気ガスも屋外に出す。給・排気筒を有するため、固定式である。</dd>
				</dl>
				<dl>
					<dt>エアコン</dt>
					<dd>電気駆動の冷暖房両用器。寒冷地では効率が悪く、不向きである。</dd>
				</dl>
				<dl>
					<dt>電気ストーブ</dt>
					<dd>電気を熱に変えるので、空気が汚れず比較的安全。小さい部屋での補助的な利用が中心である。</dd>
				</dl>
			</div>
		</div>
		<div class="attentionBox">
			<h3>判定基準</h3>
			<div class="left">
				<dl>
					<dt>温度</dt>
					<dd>17℃以上、28℃以下であることが望ましい。</dd>
				</dl>
				<dl>
					<dt>相対湿度</dt>
					<dd>30%以上、80%以下であることが望ましい。</dd>
				</dl>
				<dl>
					<dt>二酸化炭素</dt>
					<dd>1500ppm以下であることが望ましい。</dd>
				</dl>
				<dl>
					<dt>一酸化炭素</dt>
					<dd>10ppm以下であること。</dd>
				</dl>
			</div>
			<div class="right">
				<dl>
					<dt>浮遊粉じん</dt>
					<dd>0.10mg/ ㎥以下であること。</dd>
				</dl>
				<dl>
					<dt>気流</dt>
					<dd>0.5m/秒以下であることが望ましい。</dd>
				</dl>
				<dl>
					<dt>二酸化窒素</dt>
					<dd>0.06ppm以下であることが望ましい。</dd>
				</dl>
			</div>
		</div>
		<p class="ttlCoaching">指導・助言</p>
		<textarea id="air_winter_coaching"></textarea>
	</div>
	<div class="btnListBox">
		<button class="btnSubmit">登録する</button>
		<button class="btnPrint">印刷する</button>
	</div>
</main>
<?php echo do_shortcode('[wpuf_edit]'); ?>
<script>
	$(document).ready(function() {

		setSchoolSelect('air_winter_ward', 'air_winter_ward_id', 'air_winter_school_type');

		$('.wpuf-fields input[type="text"], .wpuf-fields textarea').each(function(index, element) {
			let id = $(element).attr('name');
			$('#' + id).val($(element).val());
		});

        const obj = document.getElementById('air_winter_ward');
        const obj_ward_id = document.getElementById('air_winter_ward_id');
        let index = obj.selectedIndex;
        let select_ward = ('00' + index).slice(-2);
        let key = Number(index)-1;
        $.getJSON('/membersite/aggregate/wp-content/themes/nagoya-yakuzaishi-aggregate/js/school_list.json', function(data) {
            for(var i=0; i<data[key][select_ward].school.length; i++){
                $('.select_school').append('<option value="'+data[key][select_ward].school[i].name+'" data-type="'+data[key][select_ward].school[i].type+'">'+data[key][select_ward].school[i].name+'</option>');
            }
        });
        obj_ward_id.value = select_ward;
        setTimeout(function(){
	        $('.select_school').val($('#air_winter_school_name_722').val());
	    },100);

		$('.wpuf-fields input[type="radio"]:checked').each(function(index, element) {
			let name = $(element).attr('name');
			$(".formBox input[name='" + name + '_rd' + "'][value='" + $(element).val() + "']").prop('checked', true);
		});

		let today = new Date();
		let year = today.getFullYear();
		let month = today.getMonth() + 1;
		let day = today.getDate();
		let title = '教室の空気定期検査表(冬季)';
		let ward,
			school;

		$('#category').val('9');

		$('.btnSubmit').on('click', function() {

			$('.formBox input, .formBox select, textarea').each(function(index, element) {
				let id = $(element).attr('id');
				let parents = $(element).parents('.inputItem').find("dt").text();
				console.log(parents + '\n' + id);
			});

			ward = $('#air_winter_ward').val();
			school = $('#air_winter_school_name').val();
			title += '[' + ward + '区]';
			title += '[' + school + ']';
			title += '[' + year + '年' + month + '月' + day + '日' + ']';

			$('#post_title_722').val(title);

			$('.formBox input[type="text"], .formBox select, .formBox textarea, .formBox input[type="hidden"]').each(function(index, element) {
				let id = $(element).attr('id');
				$('#' + id + '_722').val($(element).val());
			});

			$('.formBox input[type="radio"]:checked').each(function(index, element) {
				let name = $(element).attr('name').slice(0, -3);
				$("input[name='" + name + "'][value='" + $(element).val() + "']").prop('checked', true);
			});

			$('.wpuf-submit-button').click();
		});

	});
</script>