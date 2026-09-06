<main class="registRecordMain registPostMain" id="registDispensary">
	<h2>保健室定期検査表</h2>
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
						<?php the_field('dispensary_ward'); ?>
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
							<?php the_field('dispensary_school_name'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>校長名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('dispensary_school_headmaster'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>学校薬剤師名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('dispensary_pharmacist'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査日時</dt>
					<dd class="selectDate txtFieldBox">
						<div class="txtField">
							<?php the_field('dispensary_date_year'); ?>
						</div>
						<span class="inputSubTxt">年</span>
						<div class="txtField">
							<?php the_field('dispensary_date_month'); ?>
						</div>
						<span class="inputSubTxt">月</span>
						<div class="txtField">
							<?php the_field('dispensary_date_day'); ?>
						</div>
						<span class="inputSubTxt">日</span>
						<div class="txtField">
							<?php the_field('dispensary_date_yobi'); ?>
						</div>
						<span class="inputSubTxt">曜日</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>児童数</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('dispensary_children'); ?>
						</div>
						<span class="inputSubTxt">名</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>養護教諭名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('dispensary_teacher'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>天候</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('dispensary_weather'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>気温</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('dispensary_temperature'); ?>
						</div>
						<span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>湿度</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('dispensary_humidity'); ?>
						</div>
						<span class="inputSubTxt">%</span>
					</dd>
				</dl>
			</div>
		</div>
		<div class="dispensaryBox">
			<div class="inputItemBox01">
				<div class="inputItemList01">
					<dl class="inputItem">
						<dt>保健室の広さ</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php the_field('dispensary_size_text'); ?>
							</div>
							<span class="inputSubTxt">㎡</span>
							<div class="txtField">
								<?php $radiofiled_dispensary_size_select = get_field('dispensary_size_select'); echo($radiofiled_dispensary_size_select); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>ベッド数</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php the_field('dispensary_bed_num'); ?>
							</div>
							<span class="inputSubTxt">台</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>ベッド(本体)</dt>
						<dd class="txtFieldBox">
							<span class="inputSubTxt">使用年数は</span>
							<div class="txtField">
								<?php $radiofiled_dispensary_bed_body_year = get_field('dispensary_bed_body_year'); echo($radiofiled_dispensary_bed_body_year); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>破損が</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_bed_body_damage = get_field('dispensary_bed_body_damage'); echo($radiofiled_dispensary_bed_body_damage); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>ベッドマット</dt>
						<dd class="txtFieldBox">
							<span class="inputSubTxt">使用年数は</span>
							<div class="txtField">
								<?php $radiofiled_dispensary_bed_mat_year = get_field('dispensary_bed_mat_year'); echo($radiofiled_dispensary_bed_mat_year); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>破損が</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_bed_mat_damage = get_field('dispensary_bed_mat_damage'); echo($radiofiled_dispensary_bed_mat_damage); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>布団</dt>
						<dd class="txtFieldBox">
							<span class="inputSubTxt">使用年数は</span>
							<div class="txtField">
								<?php $radiofiled_dispensary_bed_futon_year = get_field('dispensary_bed_futon_year'); echo($radiofiled_dispensary_bed_futon_year); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>破損が</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_bed_futon_damage = get_field('dispensary_bed_futon_damage'); echo($radiofiled_dispensary_bed_futon_damage); ?>
							</div>
						</dd>
					</dl>
				</div>
			</div>
			<div class="inputItemBox02">
				<div class="inputItemList02">
					<dl class="inputItem">
						<dt>冷蔵庫または冷暗所が</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_refrigerator = get_field('dispensary_refrigerator'); echo($radiofiled_dispensary_refrigerator); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>薬品戸棚に鍵が</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_shelf_key = get_field('dispensary_shelf_key'); echo($radiofiled_dispensary_shelf_key); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>薬品戸棚、冷蔵庫の配置</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_placement = get_field('dispensary_placement'); echo($radiofiled_dispensary_placement); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>内・外用薬が区別して</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_distinction = get_field('dispensary_distinction'); echo($radiofiled_dispensary_distinction); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>毒劇薬・毒劇物が</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_poisonous_drug = get_field('dispensary_poisonous_drug'); echo($radiofiled_dispensary_poisonous_drug); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>不良薬品が</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_bad_medicine = get_field('dispensary_bad_medicine'); echo($radiofiled_dispensary_bad_medicine); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室に冷房設備が </dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_airconditioning = get_field('dispensary_airconditioning'); echo($radiofiled_dispensary_airconditioning); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室にシャワー設備が </dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_shower = get_field('dispensary_shower'); echo($radiofiled_dispensary_shower); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室に専用トイレが</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_toilet = get_field('dispensary_toilet'); echo($radiofiled_dispensary_toilet); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室に専用掃除機が </dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_vacuum_cleaner = get_field('dispensary_vacuum_cleaner'); echo($radiofiled_dispensary_vacuum_cleaner); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室に専用洗濯機が</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_washing_machine = get_field('dispensary_washing_machine'); echo($radiofiled_dispensary_washing_machine); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室に外線電話が</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_phone = get_field('dispensary_phone'); echo($radiofiled_dispensary_phone); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室の照度</dt>
						<dd class="txtFieldBox">
							<span class="inputSubTxt">平均照度</span>
							<div class="txtField">
								<?php the_field('dispensary_room_luminosity'); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>休養室の照度</dt>
						<dd class="txtFieldBox">
							<span class="inputSubTxt">平均照度</span>
							<div class="txtField">
								<?php $radiofiled_dispensary_rest_room_luminosity = get_field('dispensary_rest_room_luminosity'); echo($radiofiled_dispensary_rest_room_luminosity); ?>
							</div>
						</dd>
					</dl>
				</div>
			</div>
			<div class="inputItemBox03">
				<div class="inputItemList03">
					<dl class="inputItem">
						<dt>ダニアレルゲン</dt>
						<dd class="txtFieldBox">
							<span class="inputSubTxt">検査箇所</span>
							<div class="txtField">
								<?php the_field('dispensary_tick_allergen_place'); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>結果</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_dispensary_tick_allergen_result = get_field('dispensary_tick_allergen_result'); echo($radiofiled_dispensary_tick_allergen_result); ?>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="attentionBox">
			<h3>基準及び事後処置</h3>
			<ul>
				<li>保健室は明るく清潔で、最低 1 教室分の広さを設け、休養室とは区別されていることが望ましい。</li>
				<li>寝台、器具戸棚、薬品戸棚、冷蔵庫など必要な備品は十分になければならない。</li>
				<li>救急薬品は、救急処置を行うのに必要最低限を常備し、原則として内服薬は児童、生徒には使用しない。</li>
				<li>学校環境衛生の実施に必要な消毒剤、殺虫剤、予防接種に必要な消毒剤など、学校病対策に必要な薬品などは、必要な時十分にその効能、効果を発揮し、目標を達することができるように、常に正しい使用と安全を配慮した保管がされていなくてはならない。</li>
				<li>衛生材料の保管、保健室救急薬品の購入、保管、管理、整頓などは、毎学期始めに、学校薬剤師の指導、助言をうけることが望ましい。指導、助言したことがあれば下記へ記入すること。</li>
				<li>保健室の照度は 200 ～ 750LX、体養室の照度は 75 ～ 300LX であること。</li>
				<li>ダニ数は 100 匹 / ㎡以下、又はこれと同等のアレルゲン量以下であること。</li>
				<li>1 部は本人の控、 1 部は学校の控、1 部は集計用に事務局まで提出すること。</li>
			</ul>
		</div>
		<p class="ttlCoaching">保健室に関するご意見、ご要望などご自由にお書き下さい。</p>
		<textarea disabled><?php the_field('dispensary_opinion'); ?></textarea>
		<p class="ttlCoaching">指導・助言</p>
		<textarea disabled><?php the_field('dispensary_coaching'); ?></textarea>
	</div>
	<div class="formBox editPostBox">
		<div class="wardBox">
			<dl class="inputItem">
				<dt>区選択</dt>
				<dd>
					<div class="selectBox">
						<select class="select_ward" id="dispensary_ward">
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
					<input type="hidden" id="dispensary_ward_id">
				</dd>
			</dl>
		</div>
		<div class="schoolInfoBox">
			<div class="inputItemList">
				<dl class="inputItem">
					<dt>学校名</dt>
					<dd>
						<div class="selectBox">
							<select class="select_school" id="dispensary_school_name">
								<option value="">選択してください</option>
							</select>
						</div>
						<input type="hidden" id="dispensary_school_type">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>校長名</dt>
					<dd>
						<input type="text" id="dispensary_school_headmaster">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>学校薬剤師名</dt>
					<dd>
						<input type="text" placeholder="※必須項目" id="dispensary_pharmacist">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査日時</dt>
					<dd class="selectDate">
						<div class="selectBox year">
							<select id="dispensary_date_year">
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
							<select id="dispensary_date_month">
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
							<select id="dispensary_date_day">
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
							<select id="dispensary_date_yobi">
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
					<dt>児童数</dt>
					<dd>
						<input class="unit" type="text" id="dispensary_children"><span class="inputSubTxt">名</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>養護教諭名</dt>
					<dd>
						<input type="text" id="dispensary_teacher">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>天候</dt>
					<dd>
						<div class="selectBox">
							<select id="dispensary_weather">
								<option>選択してください</option>
								<option>晴</option>
								<option>曇</option>
								<option>雨</option>
							</select>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>気温</dt>
					<dd>
						<input class="unit" type="text" id="dispensary_temperature"><span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>湿度</dt>
					<dd>
						<input class="unit" type="text" id="dispensary_humidity"><span class="inputSubTxt">%</span>
					</dd>
				</dl>
			</div>
		</div>
		<div class="dispensaryBox">
			<div class="inputItemBox01">
				<div class="inputItemList01">
					<dl class="inputItem">
						<dt>保健室の広さ</dt>
						<dd>
							<input class="unit" type="text" id="dispensary_size_text"><span class="inputSubTxt">㎡</span>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_size_select_rd" value="狭い" id="dispensary_size_select_01">
									<label for="dispensary_size_select_01">狭い</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_size_select_rd" value="丁度良い" id="dispensary_size_select_02">
									<label for="dispensary_size_select_02">丁度良い</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>ベッド数</dt>
						<dd>
							<input class="unit" type="text" id="dispensary_bed_num"><span class="inputSubTxt">台</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>ベッド(本体)</dt>
						<dd><span class="inputSubTxt">使用年数は</span>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_body_year_rd" value="5年以内" id="dispensary_bed_body_year_01">
									<label for="dispensary_bed_body_year_01">5年以内</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_body_year_rd" value="10年以内" id="dispensary_bed_body_year_02">
									<label for="dispensary_bed_body_year_02">10年以内</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_body_year_rd" value="10年以上" id="dispensary_bed_body_year_03">
									<label for="dispensary_bed_body_year_03">それ以上</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>破損が</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_body_damage_rd" value="有" id="dispensary_bed_body_damage_01">
									<label for="dispensary_bed_body_damage_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_body_damage_rd" value="無" id="dispensary_bed_body_damage_02">
									<label for="dispensary_bed_body_damage_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>ベッドマット</dt>
						<dd><span class="inputSubTxt">使用年数は</span>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_mat_year_rd" value="5年以内" id="dispensary_bed_mat_year_01">
									<label for="dispensary_bed_mat_year_01">5年以内</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_mat_year_rd" value="10年以内" id="dispensary_bed_mat_year_02">
									<label for="dispensary_bed_mat_year_02">10年以内</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_mat_year_rd" value="10年以上" id="dispensary_bed_mat_year_03">
									<label for="dispensary_bed_mat_year_03">それ以上</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>破損が</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_mat_damage_rd" value="有" id="dispensary_bed_mat_damage_01">
									<label for="dispensary_bed_mat_damage_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_mat_damage_rd" value="無" id="dispensary_bed_mat_damage_02">
									<label for="dispensary_bed_mat_damage_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>布団</dt>
						<dd><span class="inputSubTxt">使用年数は</span>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_futon_year_rd" value="5年以内" id="dispensary_bed_futon_year_01">
									<label for="dispensary_bed_futon_year_01">5年以内</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_futon_year_rd" value="10年以内" id="dispensary_bed_futon_year_02">
									<label for="dispensary_bed_futon_year_02">10年以内</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_futon_year_rd" value="10年以上" id="dispensary_bed_futon_year_03">
									<label for="dispensary_bed_futon_year_03">それ以上</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>破損が</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_futon_damage_rd" value="有" id="dispensary_bed_futon_damage_01">
									<label for="dispensary_bed_futon_damage_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_bed_futon_damage_rd" value="無" id="dispensary_bed_futon_damage_02">
									<label for="dispensary_bed_futon_damage_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
				</div>
			</div>
			<div class="inputItemBox02">
				<div class="inputItemList02">
					<dl class="inputItem">
						<dt>冷蔵庫または冷暗所が</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_refrigerator_rd" value="有" id="dispensary_refrigerator_01">
									<label for="dispensary_refrigerator_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_refrigerator_rd" value="無" id="dispensary_refrigerator_02">
									<label for="dispensary_refrigerator_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>薬品戸棚に鍵が</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_shelf_key_rd" value="有" id="dispensary_shelf_key_01">
									<label for="dispensary_shelf_key_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_shelf_key_rd" value="無" id="dispensary_shelf_key_02">
									<label for="dispensary_shelf_key_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>薬品戸棚、冷蔵庫の配置</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_placement_rd" value="適" id="dispensary_placement_01">
									<label for="dispensary_placement_01">適</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_placement_rd" value="不適" id="dispensary_placement_02">
									<label for="dispensary_placement_02">不適</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>内・外用薬が区別して</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_distinction_rd" value="有" id="dispensary_distinction_01">
									<label for="dispensary_distinction_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_distinction_rd" value="無" id="dispensary_distinction_02">
									<label for="dispensary_distinction_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>毒劇薬・毒劇物が </dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_poisonous_drug_rd" value="有" id="dispensary_poisonous_drug_01">
									<label for="dispensary_poisonous_drug_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_poisonous_drug_rd" value="無" id="dispensary_poisonous_drug_02">
									<label for="dispensary_poisonous_drug_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>不良薬品が </dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_bad_medicine_rd" value="有" id="dispensary_bad_medicine_01">
									<label for="dispensary_bad_medicine_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_bad_medicine_rd" value="無" id="dispensary_bad_medicine_02">
									<label for="dispensary_bad_medicine_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室に冷房設備が </dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_airconditioning_rd" value="有" id="dispensary_airconditioning_01">
									<label for="dispensary_airconditioning_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_airconditioning_rd" value="無" id="dispensary_airconditioning_02">
									<label for="dispensary_airconditioning_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室にシャワー設備が </dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_shower_rd" value="有" id="dispensary_shower_01">
									<label for="dispensary_shower_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_shower_rd" value="無" id="dispensary_shower_02">
									<label for="dispensary_shower_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室に専用トイレが</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_toilet_rd" value="有" id="dispensary_toilet_01">
									<label for="dispensary_toilet_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_toilet_rd" value="無" id="dispensary_toilet_02">
									<label for="dispensary_toilet_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室に専用掃除機が </dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_vacuum_cleaner_rd" value="有" id="dispensary_vacuum_cleaner_01">
									<label for="dispensary_vacuum_cleaner_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_vacuum_cleaner_rd" value="無" id="dispensary_vacuum_cleaner_02">
									<label for="dispensary_vacuum_cleaner_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室に専用洗濯機が</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_washing_machine_rd" value="有" id="dispensary_washing_machine_01">
									<label for="dispensary_washing_machine_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_washing_machine_rd" value="無" id="dispensary_washing_machine_02">
									<label for="dispensary_washing_machine_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室に外線電話が</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_phone_rd" value="有" id="dispensary_phone_01">
									<label for="dispensary_phone_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_phone_rd" value="無" id="dispensary_phone_02">
									<label for="dispensary_phone_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>保健室の照度</dt>
						<dd><span class="inputSubTxt">平均照度</span>
							<input class="unit" type="text" id="dispensary_room_luminosity"><span class="inputSubTxt">LX</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>休養室の照度</dt>
						<dd><span class="inputSubTxt">平均照度</span>
							<input class="unit" type="text" id="dispensary_rest_room_luminosity"><span class="inputSubTxt">lx</span>
						</dd>
					</dl>
				</div>
			</div>
			<div class="inputItemBox03">
				<div class="inputItemList03">
					<dl class="inputItem">
						<dt>ダニアレルゲン</dt>
						<dd><span class="inputSubTxt">検査箇所</span>
							<input class="unit" type="text" id="dispensary_tick_allergen_place">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>結果</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="dispensary_tick_allergen_result_rd" value="100匹/㎡以下" id="dispensary_tick_allergen_result_01">
									<label for="dispensary_tick_allergen_result_01">100匹/㎡以下</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="dispensary_tick_allergen_result_rd" value="100匹/㎡より↑" id="dispensary_tick_allergen_result_02">
									<label for="dispensary_tick_allergen_result_02">100匹/㎡より↑</label>
								</li>
							</ul>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="attentionBox">
			<h3>基準及び事後処置</h3>
			<ul>
				<li>保健室は明るく清潔で、最低1教室分の広さを設け、休養室とは区別されていることが望ましい。</li>
				<li>寝台、器具戸棚、薬品戸棚、冷蔵庫など必要な備品は十分になければならない。</li>
				<li>救急薬品は、救急処置を行うのに必要最低限を常備し、原則として内服薬は児童、生徒には使用しない。</li>
				<li>学校環境衛生の実施に必要な消毒剤、殺虫剤、予防接種に必要な消毒剤など、学校病対策に必要な薬品などは、必要な時十分にその効能、効果を発揮し、目標を達することができるように、常に正しい使用と安全を配慮した保管がされていなくてはならない。</li>
				<li>衛生材料の保管、保健室救急薬品の購入、保管、管理、整頓などは、毎学期始めに、学校薬剤師の指導、助言をうけることが望ましい。指導、助言したことがあれば下記へ記入すること。</li>
				<li>保健室の照度は200～750LX、体養室の照度は75～300lxであること。</li>
				<li>ダニ数は100匹/㎡以下、又はこれと同等のアレルゲン量以下であること。</li>
				<li>1部は本人の控、1部は学校の控、1部は集計用に支部長まで提出すること。</li>
			</ul>
		</div>
		<p class="ttlCoaching">保健室に関するご意見、ご要望などご自由にお書き下さい。</p>
		<textarea id="dispensary_opinion"></textarea>
		<p class="ttlCoaching">指導・助言</p>
		<textarea id="dispensary_coaching"></textarea>
	</div>
	<div class="btnListBox">
		<button class="btnSubmit">登録する</button>
		<button class="btnPrint">印刷する</button>
	</div>
</main>
<?php echo do_shortcode('[wpuf_edit]'); ?>
<script>
	$(document).ready(function() {

		setSchoolSelect('dispensary_ward', 'dispensary_ward_id', 'dispensary_school_type');

		$('.wpuf-fields input[type="text"], .wpuf-fields textarea').each(function(index, element) {
			let id = $(element).attr('name');
			$('#' + id).val($(element).val());
		});

        const obj = document.getElementById('dispensary_ward');
        const obj_ward_id = document.getElementById('dispensary_ward_id');
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
	        $('.select_school').val($('#dispensary_school_name_328').val());
	    },100);

		$('.wpuf-fields input[type="radio"]:checked').each(function(index, element) {
			let name = $(element).attr('name');
			$(".formBox input[name='" + name + '_rd' + "'][value='" + $(element).val() + "']").prop('checked', true);
		});

		let today = new Date();
		let year = today.getFullYear();
		let month = today.getMonth() + 1;
		let day = today.getDate();
		let title = '保健室定期検査表';
		let ward,
			school;

		$('#category').val('3');

		$('.btnSubmit').on('click', function() {

			$('.formBox input, .formBox select, textarea').each(function(index, element) {
				let id = $(element).attr('id');
				let parents = $(element).parents('.inputItem').find("dt").text();
				console.log(parents + '\n' + id);
			});

			ward = $('#dispensary_ward').val();
			school = $('#dispensary_school_name').val();
			title += '[' + ward + '区]';
			title += '[' + school + ']';
			title += '[' + year + '年' + month + '月' + day + '日' + ']';

			$('#post_title_328').val(title);

			$('.formBox input[type="text"], .formBox select, .formBox textarea, .formBox input[type="hidden"]').each(function(index, element) {
				let id = $(element).attr('id');
				$('#' + id + '_328').val($(element).val());
			});

			$('.formBox input[type="radio"]:checked').each(function(index, element) {
				let name = $(element).attr('name').slice(0, -3);
				$("input[name='" + name + "'][value='" + $(element).val() + "']").prop('checked', true);
			});

			$('.wpuf-submit-button').click();
		});

	});
</script>