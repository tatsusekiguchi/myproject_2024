<main class="registRecordMain registPostMain" id="registLighting">
	<?php
	$category = get_the_category();
	$cat_slug = $category[0]->category_nicename;
	$cat_name = $category[0]->cat_name;?>
	<h2><?php echo $cat_name;?></h2>
	<div class="formBox confirmPostBox">
		<div class="sealBox">
			<p>名古屋市教育委員会<br>名古屋市薬剤師会</p>
		</div>
		<div class="wardBox">
			<dl class="inputItem">
				<dt>区選択</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('lighting_winter_ward'); ?>
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
						<?php the_field('lighting_winter_school_name'); ?>
					</div>
				</dd>
				</dl>
				<dl class="inputItem">
					<dt>校長名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_winter_school_headmaster'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>学校薬剤師名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_winter_pharmacist'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査日時</dt>
					<dd class="selectDate txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_winter_date_year'); ?>
						</div>
						<span class="inputSubTxt">年</span>
						<div class="txtField">
							<?php the_field('lighting_winter_date_month'); ?>
						</div>
						<span class="inputSubTxt">月</span>
						<div class="txtField">
							<?php the_field('lighting_winter_date_day'); ?>
						</div>
						<span class="inputSubTxt">日</span>
						<div class="txtField">
							<?php the_field('lighting_winter_date_yobi'); ?>
						</div>
						<span class="inputSubTxt">曜日</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>時刻</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php $radiofiled_lighting_winter_ampm = get_field('lighting_winter_ampm'); echo($radiofiled_lighting_winter_ampm); ?>
						</div>
						<div class="txtField">
							<?php the_field('lighting_winter_time_text'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>天候</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_winter_weather'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>気温</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_winter_temperature'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>照度計</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_winter_illuminometer'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>測定範囲</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('lighting_winter_range'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>照度計は</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php $radiofiled_lighting_winter_illuminometer_type = get_field('lighting_winter_illuminometer_type'); echo($radiofiled_lighting_winter_illuminometer_type); ?>
						</div>
					</dd>
				</dl>
			</div>
		</div>
		<div class="lightingBox">
			<div class="inputItemBox">
				<div class="leftBox">
					<dl class="inputItem">
						<dt>教室名</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php the_field('lighting_winter_grade'); ?>
							</div>
							<span class="inputSubTxt">年</span>
							<div class="txtField">
								<?php the_field('lighting_winter_class'); ?>
							</div>
							<span class="inputSubTxt">組</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>黒板に向かっての廊下</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_lighting_winter_corridor = get_field('lighting_winter_corridor'); echo($radiofiled_lighting_winter_corridor); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>カーテンの有・無、色</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_lighting_winter_is_curtain = get_field('lighting_winter_is_curtain'); echo($radiofiled_lighting_winter_is_curtain); ?>
							</div>
							<div class="txtField">
								&nbsp;<?php the_field('lighting_winter_curtain_color'); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>黒板照明具</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_lighting_winter_light_blackboard = get_field('lighting_winter_light_blackboard'); echo($radiofiled_lighting_winter_light_blackboard); ?>
							</div>
							<div class="lightItemBox">
								<div>
									<span class="inputSubTxt"><?php the_field('lighting_winter_light_blackboard_w'); ?></span>
									<span class="inputSubTxt">W</span>
								</div>
								<div>
									<span class="inputSubTxt"><?php the_field('lighting_winter_light_blackboard_num'); ?></span>
									<span class="inputSubTxt">本</span>
								</div>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>教室照明具</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_lighting_winter_light_classroom = get_field('lighting_winter_light_classroom'); echo($radiofiled_lighting_winter_light_classroom); ?>
							</div>
							<div class="lightItemBox">
								<div>
									<span class="inputSubTxt"><?php the_field('lighting_winter_light_classroom_w'); ?></span>
									<span class="inputSubTxt">W</span>
								</div>
								<div>
									<span class="inputSubTxt"><?php the_field('lighting_winter_light_classroom_num'); ?></span>
									<span class="inputSubTxt">本</span>
								</div>
							</div>
						</dd>
					</dl>
				</div>
				<div class="rightBox">
					<dl class="inputItem">
						<dt>黒板照度</dt>
						<dd class="txtFieldBox">
							<ul class="lightList">
								<li>
									<span class="inputSubTxt">最大</span>
									<div class="txtField">
										<?php the_field('lighting_winter_light_blackboard_max'); ?>
									</div>
									<span class="inputSubTxt">LX</span>
								</li>
								<li>
									<span class="inputSubTxt">最小</span>
									<div class="txtField">
										<?php the_field('lighting_winter_light_blackboard_min'); ?>
									</div>
									<span class="inputSubTxt">LX</span>
								</li>
								<li>
									<span class="inputSubTxt">最大・最小</span>
									<div class="txtField">
										<?php the_field('lighting_winter_light_blackboard_minmax'); ?>
									</div>
									<span class="inputSubTxt">:1</span>
								</li>
							</ul>

						</dd>
					</dl>
					<dl class="inputItem">
						<dt>教室照度</dt>
						<dd class="txtFieldBox">
							<ul class="lightList">
								<li>
									<span class="inputSubTxt">最大</span>
									<div class="txtField">
										<?php the_field('lighting_winter_light_classroom_max'); ?>
									</div>
									<span class="inputSubTxt">LX</span>
								</li>
								<li>
									<span class="inputSubTxt">最小</span>
									<div class="txtField">
										<?php the_field('lighting_winter_light_classroom_min'); ?>
									</div>
									<span class="inputSubTxt">LX</span>
								</li>
								<li>
									<span class="inputSubTxt">最大・最小</span>
									<div class="txtField">
										<?php the_field('lighting_winter_light_classroom_minmax'); ?>
									</div>
									<span class="inputSubTxt">:1</span>
								</li>
							</ul>

						</dd>
					</dl>
					<dl class="inputItem">
						<dt>まぶしさ</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_lighting_winter_glare = get_field('lighting_winter_glare'); echo($radiofiled_lighting_winter_glare); ?>
							</div>
						</dd>
					</dl>
				</div>
			</div>
			<aside>
				<p>1.10月と2月の実施の内、1回は曇り又は雨の日に預1定することが望ましい。</p>
				<p>2.測定する教室は学校が希望する教室とする。</p>
				<div class="reasonBox">
					<p>3. その教室を選んだ理由：<?php the_field('lighting_winter_reason'); ?></p>
				</div>
			</aside>
		</div>
		<div class="figureBox"><img src="<?php bloginfo('template_url'); ?>/image/common/record_lighting_figure.png" alt=""></div>
		<div class="attentionBox">
			<h3>基準及び記入上の注意</h3>
			<ul>
				<li>測定は、雨天又は曇天に照明器を全て点灯して測定し、最大照度と最小照度のみ記入すること。教室の照度は、上記図に示す9ヶ所に最も近い児童・生徒の机上で測定し、又黒板の照度は図の9ヶ所の垂直面照度を測定すること。</li>
				<li>最前列及び最後列の四隅の児童・生徒の椅子に腰掛けて、黒板を見て窓や光源がまぶしくないか黒板面が光っていないか注意すること。</li>
				<li>教室及びそれに準ずる場所の照度の下限値は 300LX とする。教室及び黒板の照度は 500LX以上が望ましい。</li>
				<li>スイッチを入れて点灯までに 3 秒以上かかる時はグローランプの取替えを、又蛍光灯直下1mの照度が500LX(蛍光灯40W2連の時は750Ⅸ)以下の場合は蛍光管の清掃又は取替えを指導すること。</li>
				<li>指導・助言したことを下記に記入すること。1部は本人の控、1部は学校の控、1部は集計用に支部長まで提出すること。</li>
			</ul>
		</div>
		<p class="ttlCoaching">指導・助言</p>
		<textarea disabled><?php the_field('lighting_winter_coaching'); ?></textarea>
	</div>
	<div class="formBox editPostBox">
		<div class="wardBox">
			<dl class="inputItem">
				<dt>区選択</dt>
				<dd>
					<div class="selectBox">
						<select class="select_ward" id="lighting_winter_ward">
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
					<input type="hidden" id="lighting_winter_ward_id">
				</dd>
			</dl>
		</div>
		<div class="schoolInfoBox">
			<div class="inputItemList">
				<dl class="inputItem">
					<dt>学校名</dt>
					<dd>
						<div class="selectBox">
							<select class="select_school" id="lighting_winter_school_name">
								<option value="">選択してください</option>
							</select>
						</div>
						<input type="hidden" id="lighting_winter_school_type">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>校長名</dt>
					<dd>
						<input type="text" id="lighting_winter_school_headmaster">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>学校薬剤師名</dt>
					<dd>
						<input type="text" placeholder="※必須項目" id="lighting_winter_pharmacist">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査日時</dt>
					<dd class="selectDate">
						<div class="selectBox year">
							<select id="lighting_winter_date_year">
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
							<select id="lighting_winter_date_month">
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
							<select id="lighting_winter_date_day">
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
							<select id="lighting_winter_date_yobi">
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
								<input type="radio" name="lighting_winter_ampm_rd" value="am" id="lighting_winter_ampm_01">
								<label for="lighting_winter_ampm_01">AM</label>
							</li>
							<li class="redioBtn">
								<input type="radio" name="lighting_winter_ampm_rd" value="pm" id="lighting_winter_ampm_02">
								<label for="lighting_winter_ampm_02">PM</label>
							</li>
						</ul>
						<input class="unitTime" type="text" id="lighting_winter_time_text">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>天候</dt>
					<dd>
						<div class="selectBox">
							<select id="lighting_winter_weather">
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
						<input class="unit" type="text" id="lighting_winter_temperature"><span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>照度計</dt>
					<dd>
						<input type="text" id="lighting_winter_illuminometer">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>測定範囲</dt>
					<dd>
						<input class="unit" type="text" id="lighting_winter_range"><span class="inputSubTxt">LX</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>照度計は</dt>
					<dd>
						<ul class="radioList">
							<li class="redioBtn">
								<input type="radio" name="lighting_winter_illuminometer_type_rd" value="自校" id="lighting_winter_illuminometer_type_01">
								<label for="lighting_winter_illuminometer_type_01">自校</label>
							</li>
							<li class="redioBtn">
								<input type="radio" name="lighting_winter_illuminometer_type_rd" value="借用" id="lighting_winter_illuminometer_type_02">
								<label for="lighting_winter_illuminometer_type_02">借用</label>
							</li>
						</ul>
					</dd>
				</dl>
			</div>
		</div>
		<div class="lightingBox">
			<div class="inputItemBox">
				<div class="leftBox">
					<dl class="inputItem">
						<dt>教室名</dt>
						<dd>
							<input class="unit" type="text" id="lighting_winter_grade"><span class="inputSubTxt">年</span>
							<input class="unit" type="text" id="lighting_winter_class"><span class="inputSubTxt">組</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>黒板に向かっての廊下</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_corridor_rd" value="右" id="lighting_winter_corridor_01">
									<label for="lighting_winter_corridor_01">右</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_corridor_rd" value="左" id="lighting_winter_corridor_02">
									<label for="lighting_winter_corridor_02">左</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>カーテンの有・無、色</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_is_curtain_rd" value="有" id="lighting_winter_is_curtain_01">
									<label for="lighting_winter_is_curtain_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_is_curtain_rd" value="無" id="lighting_winter_is_curtain_02">
									<label for="lighting_winter_is_curtain_02">無</label>
								</li>
							</ul><span class="inputSubTxt">色</span>
							<input class="unit" type="text" id="lighting_winter_curtain_color">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>黒板照明具</dt>
						<dd>
							<ul class="radioList blackboardLight">
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_light_blackboard_rd" value="インバータ" id="lighting_winter_light_blackboard_01">
									<label for="lighting_winter_light_blackboard_01">インバータ</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_light_blackboard_rd" value="グロー式" id="lighting_winter_light_blackboard_02">
									<label for="lighting_winter_light_blackboard_02">グロー式</label>
								</li>
							</ul>
							<div class="lightItemBox">
								<input class="unit" type="text" id="lighting_winter_light_blackboard_w"><span class="inputSubTxt">W</span>
								<input class="unit" type="text" id="lighting_winter_light_blackboard_num"><span class="inputSubTxt">本</span>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>教室照明具</dt>
						<dd>
							<ul class="radioList radioLight">
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_light_classroom_rd" value="天井直付" id="lighting_winter_light_classroom_01">
									<label for="lighting_winter_light_classroom_01">天井直付</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_light_classroom_rd" value="吊り下げ" id="lighting_winter_light_classroom_02">
									<label for="lighting_winter_light_classroom_02">吊り下げ</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_light_classroom_rd" value="インバータ" id="lighting_winter_light_classroom_03">
									<label for="lighting_winter_light_classroom_03">インバータ</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_light_classroom_rd" value="グロー式" id="lighting_winter_light_classroom_04">
									<label for="lighting_winter_light_classroom_04">グロー式</label>
								</li>
							</ul>
							<div class="lightItemBox">
								<input class="unit" type="text" id="lighting_winter_light_classroom_w"><span class="inputSubTxt">W</span>
								<input class="unit" type="text" id="lighting_winter_light_classroom_num"><span class="inputSubTxt">本 </span>
							</div>
						</dd>
					</dl>
				</div>
				<div class="rightBox">
					<dl class="inputItem">
						<dt>黒板照度</dt>
						<dd>
							<ul class="lightList">
								<li><span class="inputSubTxt">最大</span>
									<input class="unit" type="text" id="lighting_winter_light_blackboard_max"><span class="inputSubTxt">LX</span>
								</li>
								<li><span class="inputSubTxt">最小</span>
									<input class="unit" type="text" id="lighting_winter_light_blackboard_min"><span class="inputSubTxt">LX</span>
								</li>
								<li><span class="inputSubTxt">最大・最小</span>
									<input class="unit" type="text" id="lighting_winter_light_blackboard_minmax"><span class="inputSubTxt">:1</span>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>教室照度</dt>
						<dd>
							<ul class="lightList">
								<li><span class="inputSubTxt">最大</span>
									<input class="unit" type="text" id="lighting_winter_light_classroom_max"><span class="inputSubTxt">LX</span>
								</li>
								<li><span class="inputSubTxt">最小</span>
									<input class="unit" type="text" id="lighting_winter_light_classroom_min"><span class="inputSubTxt">LX</span>
								</li>
								<li><span class="inputSubTxt">最大・最小</span>
									<input class="unit" type="text" id="lighting_winter_light_classroom_minmax"><span class="inputSubTxt">:1</span>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>まぶしさ</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_glare_rd" value="黒板" id="lighting_winter_glare_01">
									<label for="lighting_winter_glare_01">黒板</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_glare_rd" value="机上" id="lighting_winter_glare_02">
									<label for="lighting_winter_glare_02">机上</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_glare_rd" value="テレビ" id="lighting_winter_glare_03">
									<label for="lighting_winter_glare_03">テレビ</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_glare_rd" value="ディスプレー" id="lighting_winter_glare_04">
									<label for="lighting_winter_glare_04">ディスプレー</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="lighting_winter_glare_rd" value="なし" id="lighting_winter_glare_05">
									<label for="lighting_winter_glare_05">なし</label>
								</li>
							</ul>
						</dd>
					</dl>
				</div>
			</div>
			<aside>
				<p>1.10月と2月の実施の内、1回は曇り又は雨の日に預1定することが望ましい。</p>
				<p>2.測定する教室は学校が希望する教室とする。</p>
				<div class="reasonBox">
					<p>3. その教室を選んだ理由</p>
					<input type="text" id="lighting_winter_reason">
				</div>
			</aside>
		</div>
		<div class="figureBox"><img src="<?php bloginfo('template_url'); ?>/image/common/record_lighting_figure.png" alt=""></div>
		<div class="attentionBox">
			<h3>基準及び記入上の注意</h3>
			<ul>
				<li>測定は、雨天又は曇天に照明器を全て点灯して測定し、最大照度と最小照度のみ記入すること。教室の照度は、上記図に示す9ヶ所に最も近い児童・生徒の机上で測定し、又黒板の照度は図の9ヶ所の垂直面照度を測定すること。</li>
				<li>最前列及び最後列の四隅の児童・生徒の椅子に腰掛けて、黒板を見て窓や光源がまぶしくないか黒板面が光っていないか注意すること。</li>
				<li>教室及びそれに準ずる場所の照度の下限値は300LXとする。教室及び黒板の照度は500LX以上が望ましい。</li>
				<li>スイッチを入れて点灯までに3秒以上かかる時はグローランプの取替えを、又蛍光灯直下1mの照度が500LX(蛍光灯40W2連の時は750Ⅸ)以下の場合は蛍光管の清掃又は取替えを指導すること。</li>
				<li>指導・助言したことを下記に記入すること。1部は本人の控、1部は学校の控、1部は集計用に支部長まで提出すること。</li>
			</ul>
		</div>
		<p class="ttlCoaching">指導・助言</p>
		<textarea id="lighting_winter_coaching"></textarea>
	</div>
	<div class="btnListBox">
		<button class="btnSubmit">登録する</button>
		<button class="btnPrint">印刷する</button>
	</div>
</main>
<?php echo do_shortcode('[wpuf_edit]'); ?>
<script>
	$(document).ready(function() {

		setSchoolSelect('lighting_winter_ward', 'lighting_winter_ward_id', 'lighting_winter_school_type');

		$('.wpuf-fields input[type="text"], .wpuf-fields textarea').each(function(index, element) {
			let id = $(element).attr('name');
			$('#' + id).val($(element).val());
		});

        const obj = document.getElementById('lighting_winter_ward');
        const obj_ward_id = document.getElementById('lighting_winter_ward_id');
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
	        $('.select_school').val($('#lighting_winter_school_name_1423').val());
	    },100);

		$('.wpuf-fields input[type="radio"]:checked').each(function(index, element) {
			let name = $(element).attr('name');
			$(".formBox input[name='" + name + '_rd' + "'][value='" + $(element).val() + "']").prop('checked', true);
		});

		let today = new Date();
		let year = today.getFullYear();
		let month = today.getMonth() + 1;
		let day = today.getDate();
		let title = '照度及び照明環境定期検査表(2月)';
		let ward,
			school;

		$('#category').val('11');

		$('.btnSubmit').on('click', function() {

			$('.formBox input, .formBox select, textarea').each(function(index, element) {
				let id = $(element).attr('id');
				let parents = $(element).parents('.inputItem').find("dt").text();
				console.log(parents + '\n' + id);
			});

			ward = $('#lighting_winter_ward').val();
			school = $('#lighting_winter_school_name').val();
			title += '[' + ward + '区]';
			title += '[' + school + ']';
			title += '[' + year + '年' + month + '月' + day + '日' + ']';

			$('#post_title_1423').val(title);

			$('.formBox input[type="text"], .formBox select, .formBox textarea, .formBox input[type="hidden"]').each(function(index, element) {
				let id = $(element).attr('id');
				$('#' + id + '_1423').val($(element).val());
			});

			$('.formBox input[type="radio"]:checked').each(function(index, element) {
				let name = $(element).attr('name').slice(0, -3);
				$("input[name='" + name + "'][value='" + $(element).val() + "']").prop('checked', true);
			});

			$('.wpuf-submit-button').click();
		});

	});
</script>