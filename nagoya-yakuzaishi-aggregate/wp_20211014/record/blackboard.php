<main class="registRecordMain registPostMain" id="registBlackboard">
<h2>学校環境衛生検査票「黒板面の色彩」</h2>
<div class="formBox confirmPostBox">
	<div class="sealBox">
		<p>名古屋市教育委員会<br>名古屋市薬剤師会</p>
	</div>
	<div class="wardBox">
		<dl class="inputItem">
			<dt>区選択</dt>
			<dd class="txtFieldBox">
				<div class="txtField">
					<?php the_field('blackboard_ward'); ?>
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
						<?php the_field('blackboard_school_name'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>学校担当職員氏名</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_school_staff'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>学校薬剤師名</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_pharmacist'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>天候</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_weather'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>温度</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_temperature'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>湿度</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_humidity'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem dateTime">
				<dt>検査日時</dt>
				<dd class="selectDate txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_date_year'); ?>
					</div>
					<span class="inputSubTxt">年</span>
					<div class="txtField">
						<?php the_field('blackboard_date_month'); ?>
					</div>
					<span class="inputSubTxt">月</span>
					<div class="txtField">
						<?php the_field('blackboard_date_day'); ?>
					</div>
					<span class="inputSubTxt">日</span>
					<div class="txtField">
						<?php the_field('blackboard_date_yobi'); ?>
					</div>
					<span class="inputSubTxt">曜日</span>
					<div class="txtField">
						<?php $radiofiled_blackboard_ampm = get_field('blackboard_ampm'); echo($radiofiled_blackboard_ampm); ?>
					</div>
					<div class="txtField">
						<?php the_field('blackboard_time_text'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>教室名</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_grade'); ?>
					</div>
					<span class="inputSubTxt">年</span>
					<div class="txtField">
						<?php the_field('blackboard_class'); ?>
					</div>
					<span class="inputSubTxt">組</span>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>場所</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_position_floor'); ?>
					</div>
					<span class="inputSubTxt">階</span>
					<div class="txtField">
						<?php the_field('blackboard_position_place'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>設置年(経過年数)</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_establish'); ?>
					</div>
					<span class="inputSubTxt">年</span>
					<div class="txtField">
						<?php the_field('blackboard_progress'); ?>
					</div>
					<span class="inputSubTxt">年経過</span>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>最近の補修</dt>
				<dd class="selectDate txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_repair_year'); ?>
					</div>
					<span class="inputSubTxt">年</span>
					<div class="txtField">
						<?php the_field('blackboard_repair_month'); ?>
					</div>
					<span class="inputSubTxt">月</span>
					<div class="txtField">
						<?php
						$checklist = get_field('blackboard_repair_check');
						if ($checklist): 
						?>
						<ul class="checkList">
						    <?php
						    foreach ((array)$checklist as $check) : ?>
						        <li class="checkBox"><?php echo $check; ?></li>
						    <?php endforeach; ?>
						</ul>
						<?php endif; ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem appearance">
				<dt>外観の状況</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php
						$checklist = get_field('blackboard_appearance_check');
						if ($checklist): 
						?>
						<ul class="checkList">
						    <?php
						    foreach ((array)$checklist as $check) : ?>
						        <li class="checkBox"><?php echo $check; ?></li>
						    <?php endforeach; ?>
						</ul>
						<?php endif; ?>
					</div>
					<div class="txtField">
						<?php the_field('blackboard_appearance_other'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem status">
				<dt>黒板面のふき取り状況</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php
						$checklist = get_field('blackboard_status_check');
						if ($checklist): 
						?>
						<ul class="checkList">
						    <?php
						    foreach ((array)$checklist as $check) : ?>
						        <li class="checkBox"><?php echo $check; ?></li>
						    <?php endforeach; ?>
						</ul>
						<?php else: ?>
						<p>不適</p>
						<?php endif; ?>
					</div>
					<div class="txtField">
						&nbsp;<?php the_field('blackboard_appearance_other'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem wipe">
				<dt>黒板拭き</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_wipe_num'); ?>
					</div>
					<span class="inputSubTxt">個</span>
					<div class="statusBox">
						<p>状態：</p>
						<div class="txtField">
							<?php
							$checklist = get_field('blackboard_wipe_check');
							if ($checklist): 
							?>
							<ul class="checkList">
							    <?php
							    foreach ((array)$checklist as $check) : ?>
							        <li class="checkBox"><?php echo $check; ?></li>
							    <?php endforeach; ?>
							</ul>
							<?php endif; ?>
						</div>
						<div class="txtField">
							<?php the_field('blackboard_wipe_other'); ?>
						</div>
					</div>
				</dd>
			</dl>
			<dl class="inputItem cleaner">
				<dt>黒板拭きクリーナー</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('blackboard_cleaner_num'); ?>
					</div>
					<span class="inputSubTxt">個</span>
					<div class="statusBox">
						<p>状態：</p>
						<div class="txtField">
							<?php
							$checklist = get_field('blackboard_cleaner_check');
							if ($checklist): 
							?>
							<ul class="checkList">
							    <?php
							    foreach ((array)$checklist as $check) : ?>
							        <li class="checkBox"><?php echo $check; ?></li>
							    <?php endforeach; ?>
							</ul>
							<?php endif; ?>
						</div>
						<div class="txtField">
							<?php the_field('blackboard_cleaner_other'); ?>
						</div>
					</div>
				</dd>
			</dl>
			<dl class="inputItem color">
				<dt>黒板面の色彩</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php
						$checklist = get_field('blackboard_color_check');
						if ($checklist): 
						?>
						<ul class="checkList">
						    <?php
						    foreach ((array)$checklist as $check) : ?>
						        <li class="checkBox"><?php echo $check; ?></li>
						    <?php endforeach; ?>
						</ul>
						<?php else: ?>
						<p>不適</p>
						<?php endif; ?>
					</div>
					<div class="txtField">
						&nbsp;<?php the_field('blackboard_color_text'); ?>
					</div>
				</dd>
			</dl>
		</div>
	</div>
	<div class="registBlackboardTable">
		<table>
			<thead>
				<tr>
					<th>検査項目</th>
					<th>結果</th>
					<th>基準</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>明度・彩度</th>
					<td>
						<div class="tblFieldBox">
							<div class="txtField">
								<?php $radiofiled_blackboard_color_result = get_field('blackboard_color_result'); echo($radiofiled_blackboard_color_result); ?>
							</div>
						</div>
					</td>
					<td rowspan="2">
						<p>(ア)無彩色の黒板面の色彩は、明度が3を超えないこと。</p>
						<p>(イ)有彩色の黒板面の色彩は、明度及び彩度が4を超えないこと。</p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="colorTxtBox">
							<div class="tblFieldBox">
								<span class="inputSubTxt">色相:</span>
								<div class="txtField">
									<?php the_field('blackboard_color_result_text'); ?>
								</div>
							</div>
						</div>
						<table class="innerTbl">
							<thead>
								<tr>
									<th>明度 / 彩度</th>
									<th>明度 / 彩度</th>
									<th>明度 / 彩度</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="tblFieldBox">
											<span class="inputSubTxt">1.&nbsp;&nbsp;</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness1_1'); ?>
											</div>
											<span class="inputSubTxt">&nbsp;/</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness1_2'); ?>
											</div>
										</div>
									</td>
									<td>
										<div class="tblFieldBox">
											<span class="inputSubTxt">4.&nbsp;&nbsp;</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness4_1'); ?>
											</div>
											<span class="inputSubTxt">&nbsp;/</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness4_2'); ?>
											</div>
										</div>
									</td>
									<td>
										<div class="tblFieldBox">
											<span class="inputSubTxt">7.&nbsp;&nbsp;</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness7_1'); ?>
											</div>
											<span class="inputSubTxt">&nbsp;/</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness7_2'); ?>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="tblFieldBox">
											<span class="inputSubTxt">2.&nbsp;&nbsp;</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness2_1'); ?>
											</div>
											<span class="inputSubTxt">&nbsp;/</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness2_2'); ?>
											</div>
										</div>
									</td>
									<td>
										<div class="tblFieldBox">
											<span class="inputSubTxt">5.&nbsp;&nbsp;</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness5_1'); ?>
											</div>
											<span class="inputSubTxt">&nbsp;/</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness5_2'); ?>
											</div>
										</div>
									</td>
									<td>
										<div class="tblFieldBox">
											<span class="inputSubTxt">8.&nbsp;&nbsp;</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness8_1'); ?>
											</div>
											<span class="inputSubTxt">&nbsp;/</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness8_2'); ?>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="tblFieldBox">
											<span class="inputSubTxt">3.&nbsp;&nbsp;</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness3_1'); ?>
											</div>
											<span class="inputSubTxt">&nbsp;/</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness3_2'); ?>
											</div>
										</div>
									</td>
									<td>
										<div class="tblFieldBox">
											<span class="inputSubTxt">6.&nbsp;&nbsp;</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness6_1'); ?>
											</div>
											<span class="inputSubTxt">&nbsp;/</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness6_2'); ?>
											</div>
										</div>
									</td>
									<td>
										<div class="tblFieldBox">
											<span class="inputSubTxt">9.&nbsp;&nbsp;</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness9_1'); ?>
											</div>
											<span class="inputSubTxt">&nbsp;/</span>
											<div class="txtField">
												<?php the_field('blackboard_brightness9_2'); ?>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p class="ttlCoaching">所見</p>
	<textarea disabled><?php the_field('blackboard_opinion'); ?></textarea>
</div>
<div class="formBox editPostBox">
	<div class="wardBox">
		<dl class="inputItem">
			<dt>区選択</dt>
			<dd>
				<div class="selectBox">
					<select class="select_ward" id="blackboard_ward">
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
				<input type="hidden" id="blackboard_ward_id">
			</dd>
		</dl>
	</div>
	<div class="schoolInfoBox">
		<div class="inputItemList">
			<dl class="inputItem">
				<dt>学校名</dt>
				<dd>
					<div class="selectBox">
						<select class="select_school" id="blackboard_school_name">
							<option value="">選択してください</option>
						</select>
					</div>
					<input type="hidden" id="blackboard_school_type">
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>学校担当職員氏名</dt>
				<dd>
					<input type="text" id="blackboard_school_staff">
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>学校薬剤師名</dt>
				<dd>
					<input type="text" placeholder="※必須項目" id="blackboard_pharmacist">
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>天候</dt>
				<dd>
					<div class="selectBox">
						<select id="blackboard_weather">
							<option>選択してください</option>
							<option>晴</option>
							<option>曇</option>
							<option>雨</option>
						</select>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>温度</dt>
				<dd>
					<input class="unitType01" type="text" id="blackboard_temperature"><span class="inputSubTxt">℃</span>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>湿度</dt>
				<dd>
					<input class="unitType01" type="text" id="blackboard_humidity"><span class="inputSubTxt">%</span>
				</dd>
			</dl>
			<dl class="inputItem dateTime">
				<dt>検査日時</dt>
				<dd class="selectDate">
					<div class="selectBox year">
						<select id="blackboard_date_year">
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
						<select id="blackboard_date_month">
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
						<select id="blackboard_date_day">
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
						<select id="blackboard_date_yobi">
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
					<ul class="radioList">
						<li class="redioBtn">
							<input type="radio" name="blackboard_ampm_rd" value="am" id="blackboard_ampm_01">
							<label for="blackboard_ampm_01">AM</label>
						</li>
						<li class="redioBtn">
							<input type="radio" name="blackboard_ampm_rd" value="pm" id="blackboard_ampm_02">
							<label for="blackboard_ampm_02">PM</label>
						</li>
					</ul>
					<input class="unitType02" type="text" id="blackboard_time_text">
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>教室名</dt>
				<dd>
					<input class="unitType03" type="text" id="blackboard_grade"><span class="inputSubTxt">年</span>
					<input class="unitType03" type="text" id="blackboard_class"><span class="inputSubTxt">組</span>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>場所</dt>
				<dd>
					<input class="unitType04" type="text" id="blackboard_position_floor"><span class="inputSubTxt">階</span>
					<input class="unitType05" type="text" id="blackboard_position_place"><span class="positionTxt">〇校舎・〇館・〇棟 〇階とご記入ください。</span>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>設置年(経過年数)</dt>
				<dd>
					<input class="unitType06" type="text" id="blackboard_establish"><span class="inputSubTxt">年</span>
					<input class="unitType07" type="text" id="blackboard_progress"><span class="inputSubTxt">年経過</span>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>最近の補修</dt>
				<dd class="selectDate">
					<div class="selectBox year">
						<select id="blackboard_repair_year">
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
						<select id="blackboard_repair_month">
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
					<div class="checkBox">
						<input type="checkbox" name="blackboard_repair_check[]_ch" value="無し" id="blackboard_repair_check">
						<label>無し</label>
					</div>
				</dd>
			</dl>
			<dl class="inputItem appearance">
				<dt>外観の状況</dt>
				<dd>
					<ul class="checkList">
						<li class="checkBox">
							<input type="checkbox" name="blackboard_appearance_check[]_ch" value="適" id="blackboard_appearance_check_01">
							<label>適</label>
						</li>
						<li class="checkBox">
							<input type="checkbox" name="blackboard_appearance_check[]_ch" value="割れ" id="blackboard_appearance_check_02">
							<label>割れ</label>
						</li>
						<li class="checkBox">
							<input type="checkbox" name="blackboard_appearance_check[]_ch" value="反り" id="blackboard_appearance_check_03">
							<label>反り</label>
						</li>
						<li class="checkBox">
							<input type="checkbox" name="blackboard_appearance_check[]_ch" value="はがれ" id="blackboard_appearance_check_04">
							<label>はがれ</label>
						</li>
						<li class="checkBox">
							<input type="checkbox" name="blackboard_appearance_check[]_ch" value="腫れ" id="blackboard_appearance_check_05">
							<label>腫れ</label>
						</li>
						<li class="checkBox">
							<input type="checkbox" name="blackboard_appearance_check[]_ch" value="さび" id="blackboard_appearance_check_06">
							<label>さび</label>
						</li>
						<li class="checkBox">
							<input type="checkbox" name="blackboard_appearance_check[]_ch" value="ピンホール" id="blackboard_appearance_check_07">
							<label>ピンホール</label>
						</li>
					</ul>
					<ul class="checkList">
						<li class="checkBox">
							<input type="checkbox" name="blackboard_appearance_check[]_ch" value="ひび" id="blackboard_appearance_check_08">
							<label>ひび</label>
						</li>
						<li class="checkBox">
							<input type="checkbox" name="blackboard_appearance_check[]_ch" value="その他" id="blackboard_appearance_check_09">
							<label>その他</label>
						</li>
					</ul>
					<input class="unitType08" type="text" id="blackboard_appearance_other">
				</dd>
			</dl>
			<dl class="inputItem status">
				<dt>黒板面のふき取り状況</dt>
				<dd>
					<ul class="checkList">
						<li class="checkBox">
							<input type="checkbox" name="blackboard_status_check[]_ch" value="適" id="blackboard_status_check">
							<label>適</label>
						</li>
					</ul>
					<input class="unitType08" type="text" id="blackboard_wiping_status_text">
				</dd>
			</dl>
			<dl class="inputItem wipe">
				<dt>黒板拭き</dt>
				<dd>
					<input class="unitType09" type="text" id="blackboard_wipe_num"><span class="inputSubTxt">個</span>
					<div class="statusBox">
						<p>状態：</p>
						<ul class="checkList">
							<li class="checkBox">
								<input type="checkbox" name="blackboard_wipe_check[]_ch" value="良" id="blackboard_wipe_check_01">
								<label>良</label>
							</li>
							<li class="checkBox">
								<input type="checkbox" name="blackboard_wipe_check[]_ch" value="ふき取り面の摩耗" id="blackboard_wipe_check_02">
								<label>ふき取り面の摩耗</label>
							</li>
							<li class="checkBox">
								<input type="checkbox" name="blackboard_wipe_check[]_ch" value="破損" id="blackboard_wipe_check_03">
								<label>破損</label>
							</li>
							<li class="checkBox">
								<input type="checkbox" name="blackboard_wipe_check[]_ch" value="その他" id="blackboard_wipe_check_04">
								<label>その他</label>
							</li>
						</ul>
						<input class="unitType10" type="text" id="blackboard_wipe_other">
					</div>
				</dd>
			</dl>
			<dl class="inputItem cleaner">
				<dt>黒板拭きクリーナー</dt>
				<dd>
					<input class="unitType09" type="text" id="blackboard_cleaner_num"><span class="inputSubTxt">台</span>
					<div class="statusBox">
						<p>状態：</p>
						<ul class="checkList">
							<li class="checkBox">
								<input type="checkbox" name="blackboard_cleaner_check[]_ch" value="良" id="blackboard_cleaner_check_01">
								<label>良</label>
							</li>
							<li class="checkBox">
								<input type="checkbox" name="blackboard_cleaner_check[]_ch" value="故障" id="blackboard_cleaner_check_02">
								<label>故障</label>
							</li>
							<li class="checkBox">
								<input type="checkbox" name="blackboard_cleaner_check[]_ch" value="清掃不良" id="blackboard_cleaner_check_03">
								<label>清掃不良</label>
							</li>
							<li class="checkBox">
								<input type="checkbox" name="blackboard_cleaner_check[]_ch" value="破損" id="blackboard_cleaner_check_04">
								<label>破損</label>
							</li>
							<li class="checkBox">
								<input type="checkbox" name="blackboard_cleaner_check[]_ch" value="その他" id="blackboard_cleaner_check_05">
								<label>その他</label>
							</li>
						</ul>
						<input class="unitType10" type="text" id="blackboard_cleaner_other">
					</div>
				</dd>
			</dl>
			<dl class="inputItem color">
				<dt>黒板面の色彩</dt>
				<dd>
					<ul class="checkList">
						<li class="checkBox">
							<input type="checkbox" name="blackboard_color_check[]_ch" value="適" id="blackboard_color_check">
							<label>適</label>
						</li>
					</ul>
					<input class="unitType08" type="text" id="blackboard_color_text"><span class="inputSubTxt"> 黒板検査用色票を用いて行う。</span><small>(簡易版を用いた場合は判定のみ)</small>
				</dd>
			</dl>
		</div>
	</div>
	<div class="registBlackboardTable">
		<table>
			<thead>
				<tr>
					<th>検査項目</th>
					<th>結果</th>
					<th>基準</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>明度・彩度</th>
					<td>
						<ul class="radioList">
							<li class="redioBtn">
								<input type="radio" name="blackboard_color_result_rd" value="適" id="blackboard_color_result_01">
								<label for="blackboard_color_result_01">適</label>
							</li>
							<li class="redioBtn">
								<input type="radio" name="blackboard_color_result_rd" value="不適" id="blackboard_color_result_02">
								<label for="blackboard_color_result_02">不適</label>
							</li>
						</ul>
					</td>
					<td rowspan="2">
						<p>(ア)無彩色の黒板面の色彩は、明度が3を超えないこと。</p>
						<p>(イ)有彩色の黒板面の色彩は、明度及び彩度が4を超えないこと。</p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="colorTxtBox"><span class="inputSubTxt">色相</span>
							<input class="unitType01" type="text" id="blackboard_color_result_text">
						</div>
						<table class="innerTbl">
							<thead>
								<tr>
									<th>明度 / 彩度</th>
									<th>明度 / 彩度</th>
									<th>明度 / 彩度</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span class="inputSubTxt">1</span>
										<input class="unitType02" type="text" id="blackboard_brightness1_1"><span class="inputSubTxt">&nbsp;/</span>
										<input class="unitType02" type="text" id="blackboard_brightness1_2">
									</td>
									<td><span class="inputSubTxt">4</span>
										<input class="unitType02" type="text" id="blackboard_brightness4_1"><span class="inputSubTxt">&nbsp;/</span>
										<input class="unitType02" type="text" id="blackboard_brightness4_2">
									</td>
									<td><span class="inputSubTxt">7</span>
										<input class="unitType02" type="text" id="blackboard_brightness7_1"><span class="inputSubTxt">&nbsp;/</span>
										<input class="unitType02" type="text" id="blackboard_brightness7_2">
									</td>
								</tr>
								<tr>
									<td><span class="inputSubTxt">2</span>
										<input class="unitType02" type="text" id="blackboard_brightness2_1"><span class="inputSubTxt">&nbsp;/</span>
										<input class="unitType02" type="text" id="blackboard_brightness2_2">
									</td>
									<td><span class="inputSubTxt">5</span>
										<input class="unitType02" type="text" id="blackboard_brightness5_1"><span class="inputSubTxt">&nbsp;/</span>
										<input class="unitType02" type="text" id="blackboard_brightness5_2">
									</td>
									<td><span class="inputSubTxt">8</span>
										<input class="unitType02" type="text" id="blackboard_brightness8_1"><span class="inputSubTxt">&nbsp;/</span>
										<input class="unitType02" type="text" id="blackboard_brightness8_2">
									</td>
								</tr>
								<tr>
									<td><span class="inputSubTxt">3</span>
										<input class="unitType02" type="text" id="blackboard_brightness3_1"><span class="inputSubTxt">&nbsp;/</span>
										<input class="unitType02" type="text" id="blackboard_brightness3_2">
									</td>
									<td><span class="inputSubTxt">6</span>
										<input class="unitType02" type="text" id="blackboard_brightness6_1"><span class="inputSubTxt">&nbsp;/</span>
										<input class="unitType02" type="text" id="blackboard_brightness6_2">
									</td>
									<td><span class="inputSubTxt">9</span>
										<input class="unitType02" type="text" id="blackboard_brightness9_1"><span class="inputSubTxt">&nbsp;/</span>
										<input class="unitType02" type="text" id="blackboard_brightness9_2">
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p class="ttlCoaching">所見</p>
	<textarea id="blackboard_opinion"></textarea>
</div>
<div class="btnListBox">
	<button class="btnSubmit">登録する</button>
	<button class="btnPrint">印刷する</button>
</div>
</main>
<?php echo do_shortcode('[wpuf_edit]'); ?>
<script>
	$(document).ready(function() {

		setSchoolSelect('blackboard_ward', 'blackboard_ward_id', 'blackboard_school_type');

		$('.wpuf-fields input[type="text"], .wpuf-fields textarea').each(function(index, element) {
			let id = $(element).attr('name');
			$('#' + id).val($(element).val());
		});

        const obj = document.getElementById('blackboard_ward');
        const obj_ward_id = document.getElementById('blackboard_ward_id');
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
	        $('.select_school').val($('#blackboard_school_name_1071').val());
	    },100);

		$('.wpuf-fields input[type="radio"]:checked').each(function(index, element) {
			let name = $(element).attr('name');
			$(".formBox input[name='" + name + '_rd' + "'][value='" + $(element).val() + "']").prop('checked', true);
		});

		$('.wpuf-fields input[type="checkbox"]:checked').each(function(index, element) {
			let name = $(element).attr('name');
			$(".formBox input[name='" + name + '_ch' + "'][value='" + $(element).val() + "']").prop('checked', true);
		});

		let today = new Date();
		let year = today.getFullYear();
		let month = today.getMonth() + 1;
		let day = today.getDate();
		let title = '学校環境衛生検査票「黒板面の色彩」';
		let ward,
			school;

		$('#category').val('6');

		$('.btnSubmit').on('click', function() {

			$('.formBox input, .formBox select, textarea').each(function(index, element) {
				let id = $(element).attr('id');
				let parents = $(element).parents('.inputItem').find("dt").text();
				console.log(parents + '\n' + id);
			});

			ward = $('#blackboard_ward').val();
			school = $('#blackboard_school_name').val();
			title += '[' + ward + '区]';
			title += '[' + school + ']';
			title += '[' + year + '年' + month + '月' + day + '日' + ']';

			$('#post_title_1071').val(title);

			$('.formBox input[type="text"], .formBox select, .formBox textarea, .formBox input[type="hidden"]').each(function(index, element) {
				let id = $(element).attr('id');
				$('#' + id + '_1071').val($(element).val());
			});

			$('.formBox input[type="radio"]:checked').each(function(index, element) {
				let name = $(element).attr('name').slice(0, -3);
				$("input[name='" + name + "'][value='" + $(element).val() + "']").prop('checked', true);
			});

			$('.wpuf-fields input[type="checkbox"]:checked').prop('checked', false);
			$('.formBox input[type="checkbox"]:checked').each(function(index, element) {
				let name = $(element).attr('name').slice(0, -3);
				$("input[name='" + name + "'][value='" + $(element).val() + "']").prop('checked', true);
			});

			$('.wpuf-submit-button').click();
		});

	});
</script>