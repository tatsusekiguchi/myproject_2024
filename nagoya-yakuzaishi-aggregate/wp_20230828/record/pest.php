<main class="registRecordMain registPostMain" id="registPest">
<h2>ネズミ、衛生害虫等検査表</h2>
<div class="formBox confirmPostBox">
	<div class="sealBox">
		<p>名古屋市薬剤師会</p>
	</div>
	<div class="wardBox">
		<dl class="inputItem">
			<dt>区選択</dt>
			<dd class="txtFieldBox">
				<div class="txtField">
					<?php the_field('pest_ward'); ?>
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
						<?php the_field('pest_school_name'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>校長名</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('pest_school_headmaster'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>学校薬剤師名</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('pest_pharmacist'); ?>
					</div>
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>検査日時</dt>
				<dd class="selectDate txtFieldBox">
					<div class="txtField">
						<?php the_field('pest_date_year'); ?>
					</div>
					<span class="inputSubTxt">年</span>
					<div class="txtField">
						<?php the_field('pest_date_month'); ?>
					</div>
					<span class="inputSubTxt">月</span>
					<div class="txtField">
						<?php the_field('pest_date_day'); ?>
					</div>
					<span class="inputSubTxt">日</span>
					<div class="txtField">
						<?php the_field('pest_date_yobi'); ?>
					</div>
					<span class="inputSubTxt">曜日</span>
				</dd>
			</dl>
			<dl class="inputItem recordStatus">
				<dt>日常点検の結果及びその記録の保存状況</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php $radiofiled_pest_record_status = get_field('pest_record_status'); echo($radiofiled_pest_record_status); ?>
					</div>
				</dd>
			</dl>
		</div>
	</div>
	<div class="registPestTable registPestTableConfirm">
		<table>
			<tbody>
				<tr>
					<th>結果</th>
					<td>
						<div class="tblFieldBox">
							<div class="txtField">
								<?php $radiofiled_pest_result = get_field('pest_result'); echo($radiofiled_pest_result); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>確認箇所</th>
					<td class="confirmPointBlock">
						<div class="confirmPointBox">
							<div class="leftBox">
								<dl>
									<dt>教室</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_classroom_normal_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>普通教室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_classroom_other_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_classroom_other_text'); ?>
													</div>
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt><span>給湯設備等熱源<br>のある場所</span></dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_heat_water_supply_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>給湯室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_heat_janitor_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>用務員室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_heat_dispensary_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>保健室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_heat_home_economics_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>家庭科室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_heat_other_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_heat_other_text'); ?>
													</div>
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>給食施設</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_meal_serving_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>配膳室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_meal_lunchroom_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>ランチルーム</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_meal_storage_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>食物保管庫</p>
												</div>
											</li>
											<li class="adjustment">
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_meal_drainage_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>排水溝</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_meal_waste_water_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>雑排水溝</p>
												</div>
											</li>
											<li class="adjustment">
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_meal_garbage_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>厨芥類保管場所</p>
												</div>
											</li>
											<li class="adjustment">
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_meal_other_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_meal_other_text'); ?>
													</div>
												</div>
											</li>
										</ul>
									</dd>
								</dl>
							</div>
							<div class="rightBox">
								<dl>
									<dt>汚水槽等</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_tank_sewage_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>汚水槽</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_tank_waste_water_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>雑排水槽</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_tank_other_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_tank_other_text'); ?>
													</div>
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>し尿浄化槽</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_septic_tank_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>浄化槽(放流口)</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_septic_tank_other_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_septic_tank_other_text'); ?>
													</div>
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>プール</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_pool_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>プール</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_pool_other_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_pool_other_text'); ?>
													</div>
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>飼育動物</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_animal_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>飼育舎</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_animal_other_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_animal_other_text'); ?>
													</div>
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>樹木等</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_tree_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<p>樹木</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_tree_other_check');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_tree_other_text'); ?>
													</div>
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>その他</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_other_point_check_1');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_other_point_text_1'); ?>
													</div>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_other_point_check_2');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_other_point_text_2'); ?>
													</div>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<?php
													$checklist = get_field('pest_other_point_check_3');
													if ($checklist): 
													?>
													<?php
												    foreach ((array)$checklist as $check) : ?>
												        <div class="checkBoxDisp"><?php echo $check; ?></div>
												    <?php endforeach; ?>
													<?php endif; ?>
												</div>
												<div class="txtCell">
													<div class="txtField">
														<?php the_field('pest_other_point_text_3'); ?>
													</div>
												</div>
											</li>
										</ul>
									</dd>
								</dl>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>基準</th>
					<td>
						<p>校舎、校地内にネズミ、衛生害虫等の生息が認められないこと。</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p class="ttlCoaching">指導・助言(発生場所・種類等は指導・助言に記載)</p>
	<textarea disabled><?php the_field('pest_coaching'); ?></textarea>
</div>
<div class="formBox editPostBox">
	<div class="wardBox">
		<dl class="inputItem">
			<dt>区選択</dt>
			<dd>
				<div class="selectBox">
					<select class="select_ward" id="pest_ward">
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
				<input type="hidden" id="pest_ward_id">
			</dd>
		</dl>
	</div>
	<div class="schoolInfoBox">
		<div class="inputItemList">
			<dl class="inputItem">
				<dt>学校名</dt>
				<dd>
					<div class="selectBox">
						<select class="select_school" id="pest_school_name">
							<option value="">選択してください</option>
						</select>
					</div>
					<input type="hidden" id="pest_school_type">
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>校長名</dt>
				<dd>
					<input type="text" id="pest_school_headmaster">
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>学校薬剤師名</dt>
				<dd>
					<input type="text" placeholder="※必須項目" id="pest_pharmacist">
				</dd>
			</dl>
			<dl class="inputItem">
				<dt>検査日時</dt>
				<dd class="selectDate">
					<div class="selectBox year">
						<select id="pest_date_year">
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
						<select id="pest_date_month">
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
						<select id="pest_date_day">
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
						<select id="pest_date_yobi">
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
			<dl class="inputItem recordStatus">
				<dt>日常点検の結果及びその記録の保存状況</dt>
				<dd>
					<ul class="radioList">
						<li class="redioBtn">
							<input type="radio" name="pest_record_status_rd" value="適" id="pest_record_status_01">
							<label for="pest_record_status_01">適</label>
						</li>
						<li class="redioBtn">
							<input type="radio" name="pest_record_status_rd" value="不適" id="pest_record_status_02">
							<label for="pest_record_status_02">不適</label>
						</li>
					</ul>
				</dd>
			</dl>
		</div>
	</div>
	<div class="registPestTable">
		<table>
			<tbody>
				<tr>
					<th>結果</th>
					<td>
						<ul class="radioList">
							<li class="redioBtn">
								<input type="radio" name="pest_result_rd" value="適" id="pest_result_01">
								<label for="pest_result_01">適</label>
							</li>
							<li class="redioBtn">
								<input type="radio" name="pest_result_rd" value="不適" id="pest_result_02">
								<label for="pest_result_02">不適</label>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>確認箇所</th>
					<td class="confirmPointBlock">
						<div class="confirmPointBox">
							<div class="leftBox">
								<dl>
									<dt>教室</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_classroom_normal_check[]_ch" value="済" id="pest_classroom_normal_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>普通教室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_classroom_other_check[]_ch" value="済" id="pest_classroom_other_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_classroom_other_text">
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt><span>給湯設備等熱源<br>のある場所</span></dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_heat_water_supply_check[]_ch" value="済" id="pest_heat_water_supply_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>給湯室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_heat_janitor_check[]_ch" value="済" id="pest_heat_janitor_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>用務員室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_heat_dispensary_check[]_ch" value="済" id="pest_heat_dispensary_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>保健室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_heat_home_economics_check[]_ch" value="済" id="pest_heat_home_economics_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>家庭科室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_heat_other_check[]_ch" value="済" id="pest_heat_other_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_heat_other_text">
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>給食施設</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_meal_serving_check[]_ch" value="済" id="pest_meal_serving_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>配膳室</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_meal_lunchroom_check[]_ch" value="済" id="pest_meal_lunchroom_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>ランチルーム</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_meal_storage_check[]_ch" value="済" id="pest_meal_storage_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>食物保管庫</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_meal_drainage_check[]_ch" value="済" id="pest_meal_drainage_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>排水溝</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_meal_waste_water_check[]_ch" value="済" id="pest_meal_waste_water_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>雑排水溝</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_meal_garbage_check[]_ch" value="済" id="pest_meal_garbage_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>厨芥類保管場所</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_meal_other_check[]_ch" value="済" id="pest_meal_other_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_meal_other_text">
												</div>
											</li>
										</ul>
									</dd>
								</dl>
							</div>
							<div class="rightBox">
								<dl>
									<dt>汚水槽等</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_tank_sewage_check[]_ch" value="済" id="pest_tank_sewage_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>汚水槽</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_tank_waste_water_check[]_ch" value="済" id="pest_tank_waste_water_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>雑排水槽</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_tank_other_check[]_ch" value="済" id="pest_tank_other_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_tank_other_text">
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>し尿浄化槽</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_septic_tank_check[]_ch" value="済" id="pest_septic_tank_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>浄化槽(放流口)</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_septic_tank_other_check[]_ch" value="済" id="pest_septic_tank_other_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_septic_tank_other_text">
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>プール</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_pool_check[]_ch" value="済" id="pest_pool_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>プール</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_pool_other_check[]_ch" value="済" id="pest_pool_other_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_pool_other_text">
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>飼育動物</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_animal_check[]_ch" value="済" id="pest_animal_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>飼育舎</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_animal_other_check[]_ch" value="済" id="pest_animal_other_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_animal_other_text">
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>樹木等</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_tree_check[]_ch" value="済" id="pest_tree_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell">
													<p>樹木</p>
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_tree_other_check[]_ch" value="済" id="pest_tree_other_check">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_tree_other_text">
												</div>
											</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>その他</dt>
									<dd>
										<ul>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_other_point_check_1[]_ch" value="済" id="pest_other_point_check_1">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_other_point_text_1">
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_other_point_check_2[]_ch" value="済" id="pest_other_point_check_2">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_other_point_text_2">
												</div>
											</li>
											<li>
												<div class="checkCell">
													<div class="checkBox">
														<input type="checkbox" name="pest_other_point_check_3[]_ch" value="済" id="pest_other_point_check_3">
														<label></label>
													</div>
												</div>
												<div class="txtCell"><span class="inputSubTxt">その他</span>
													<input class="unit" type="text" id="pest_other_point_text_3">
												</div>
											</li>
										</ul>
									</dd>
								</dl>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<th>基準</th>
					<td>
						<p>校舎、校地内にネズミ、衛生害虫等の生息が認められないこと。</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p class="ttlCoaching">指導・助言(発生場所・種類等は指導・助言に記載)</p>
	<textarea id="pest_coaching"></textarea>
</div>
<div class="btnListBox">
	<button class="btnSubmit">登録する</button>
	<button class="btnPrint">印刷する</button>
</div>
</main>
<?php echo do_shortcode('[wpuf_edit]'); ?>
<script>
	$(document).ready(function() {

		setSchoolSelect('pest_ward', 'pest_ward_id', 'pest_school_type');

		$('.wpuf-fields input[type="text"], .wpuf-fields textarea').each(function(index, element) {
			let id = $(element).attr('name');
			$('#' + id).val($(element).val());
		});

        const obj = document.getElementById('pest_ward');
        const obj_ward_id = document.getElementById('pest_ward_id');
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
	        $('.select_school').val($('#pest_school_name_1217').val());
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
		let title = 'ネズミ、衛生害虫等検査表';
		let ward,
			school;

		$('#category').val('12');

		$('.btnSubmit').on('click', function() {

			$('.formBox input, .formBox select, textarea').each(function(index, element) {
				let id = $(element).attr('id');
				let parents = $(element).parents('.inputItem').find("dt").text();
				console.log(parents + '\n' + id);
			});

			ward = $('#pest_ward').val();
			school = $('#pest_school_name').val();
			title += '[' + ward + '区]';
			title += '[' + school + ']';
			title += '[' + year + '年' + month + '月' + day + '日' + ']';

			$('#post_title_1217').val(title);

			$('.formBox input[type="text"], .formBox select, .formBox textarea, .formBox input[type="hidden"]').each(function(index, element) {
				let id = $(element).attr('id');
				$('#' + id + '_1217').val($(element).val());
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