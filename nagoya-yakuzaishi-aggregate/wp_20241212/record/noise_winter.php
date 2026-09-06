<main class="registRecordMain registPostMain" id="registNoise">
	<h2>教室の騒音定期検査表(冬季)</h2>
	<div id="noiseFormBoxWinter" class="formBox confirmPostBox">
		<div class="sealBox">
			<p>名古屋市薬剤師会</p>
		</div>
		<div class="wardBox">
			<dl class="inputItem">
				<dt>区選択</dt>
				<dd class="txtFieldBox">
					<div class="txtField">
						<?php the_field('noise_winter_ward'); ?>
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
							<?php the_field('noise_winter_school_name'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>校長名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('noise_winter_school_headmaster'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>学校薬剤師名</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('noise_winter_pharmacist'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査日時</dt>
					<dd class="selectDate txtFieldBox">
						<div class="txtField">
							<?php the_field('noise_winter_date_year'); ?>
						</div>
						<span class="inputSubTxt">年</span>
						<div class="txtField">
							<?php the_field('noise_winter_date_month'); ?>
						</div>
						<span class="inputSubTxt">月</span>
						<div class="txtField">
							<?php the_field('noise_winter_date_day'); ?>
						</div>
						<span class="inputSubTxt">日</span>
						<div class="txtField">
							<?php the_field('noise_winter_date_yobi'); ?>
						</div>
						<span class="inputSubTxt">曜日</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>天候</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('noise_winter_weather'); ?>
						</div>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>気温</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('noise_winter_temperature'); ?>
						</div>
						<span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>風向</dt>
					<dd class="txtFieldBox">
						<div class="txtField">
							<?php the_field('noise_winter_wind_direction'); ?>
						</div>
					</dd>
				</dl>
			</div>
		</div>
		<div class="noiseBox">
			<div class="inputItemBox01">
				<div class="inputItemList01">
					<dl class="inputItem">
						<dt>教室名</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php the_field('noise_winter_grade'); ?>
							</div>
							<span class="inputSubTxt">年</span>
							<div class="txtField">
								<?php the_field('noise_winter_class'); ?>
							</div>
							<span class="inputSubTxt">組</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>測定位置</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php the_field('noise_winter_position_floor'); ?>
							</div>
							<span class="inputSubTxt">階</span>
							<div class="txtField">
								<?php $radiofiled_noise_winter_position_select = get_field('noise_winter_position_select'); echo($radiofiled_noise_winter_position_select); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>測定器</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php the_field('noise_winter_instrument'); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>窓の材質</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php the_field('noise_winter_window_material'); ?>
							</div>
						</dd>
					</dl>
				</div>
			</div>
			<div class="inputItemBox02">
				<div class="inputItemList02">
					<dl class="inputItem">
						<dt>二重窓などの防音設備</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_noise_winter_soundproof = get_field('noise_winter_soundproof'); echo($radiofiled_noise_winter_soundproof); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>強制換気設備の有無</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_noise_winter_ventilation = get_field('noise_winter_ventilation'); echo($radiofiled_noise_winter_ventilation); ?>
							</div>
						</dd>
					</dl>
				</div>
			</div>
			<div class="inputItemBox03">
				<div class="inputItemList03">
					<dl class="inputItem">
						<dt>学校周辺に特殊な騒音源が</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_noise_winter_source = get_field('noise_winter_source'); echo($radiofiled_noise_winter_source); ?>
							</div>
							<div class="txtField">
								<?php the_field('noise_winter_source_particular'); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>航空機の騒音で授業が中断することが</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_noise_winter_airplane = get_field('noise_winter_airplane'); echo($radiofiled_noise_winter_airplane); ?>
							</div>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>測定時の最大音は何の音であったか</dt>
						<dd class="txtFieldBox">
							<div class="txtField">
								<?php $radiofiled_noise_winter_maximum = get_field('noise_winter_maximum'); echo($radiofiled_noise_winter_maximum); ?>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="registNoiseTable">
			<table>
				<thead>
					<tr>
						<th colspan="2">測定場所</th>
						<th>測定時間</th>
						<th>等価騒音レベル</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="classroom" rowspan="2">教室内</th>
						<th>窓閉鎖</th>
						<td>
							<div class="tblFieldBox">
								<div class="txtField">
									<?php the_field('noise_winter_close_measuring_time'); ?>〜<?php the_field('noise_winter_close_measuring_time_to'); ?>
								</div>
							</div>
						</td>
						<td>
							<div class="tblFieldBox">
								<span class="inputSubTxt">LAeq</span>
								<div class="txtField">
									<?php the_field('noise_winter_close_measuring_level'); ?>
								</div>
								<span class="inputSubTxt">dB</span>
							</div>
						</td>
					</tr>
					<tr>
						<th>窓開放</th>
						<td>
							<div class="tblFieldBox">
								<div class="txtField">
									<?php the_field('noise_winter_open_measuring_time'); ?>〜<?php the_field('noise_winter_open_measuring_time_to'); ?>
								</div>
							</div>
						</td>
						<td>
							<div class="tblFieldBox">
								<span class="inputSubTxt">LAeq</span>
								<div class="txtField">
									<?php the_field('noise_winter_open_measuring_level'); ?>
								</div>
								<span class="inputSubTxt">dB</span>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="attentionBox">
			<h3>基準及び事後措置</h3>
			<ul>
				<li>教室内の等価騒音レベルは、窓を閉じているときは LAeq 50dB 以下、窓を開けているときは LAeq 55dB 以下であることが望ましい。</li>
				<li>教師の声 ( 全国平均 65dB) が、外部騒音によってマスキングされないように注意すること。</li>
				<li>判定基準を超える場合は適当な方法によって、音をさえぎる措置をとるように指導すること。</li>
			</ul>
		</div>
		<div class="attentionBox">
			<h3>測定場所及び記入上の注意</h3>
			<ul>
				<li>学校で校外騒音の影響を最も強く受ける普通教室を選び、教室の中程で騒音の入る側の窓面より1m以内の机上で生徒不在の教室にて窓閉鎖、窓開放の順で2回測定を行い記入すること。</li>
				<li>A特性5分間等価騒音レベル (LAeq) を測定する。</li>
				<li>特定の校外騒音があり授業に影響のある教室がある場合は、騒音源の種類、内容、距離、時間など出来るだけ具体的に記入すること。<br>
				指導・助言したことを下記に記入すること。 1 部は本人の控、 1 部は学校の控とすること。</li>
			</ul>
		</div>
		<p class="ttlCoaching">指導・助言</p>
		<textarea disabled><?php the_field('noise_winter_coaching'); ?></textarea>
	</div>
	<div id="noiseFormBoxWinter" class="formBox editPostBox">
		<div class="wardBox">
			<dl class="inputItem">
				<dt>区選択</dt>
				<dd>
					<div class="selectBox">
						<select class="select_ward" id="noise_winter_ward">
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
					<input type="hidden" id="noise_winter_ward_id">
				</dd>
			</dl>
		</div>
		<div class="schoolInfoBox">
			<div class="inputItemList">
				<dl class="inputItem">
					<dt>学校名</dt>
					<dd>
						<div class="selectBox">
							<select class="select_school" id="noise_winter_school_name">
								<option value="">選択してください</option>
							</select>
						</div>
						<input type="hidden" id="noise_winter_school_type">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>校長名</dt>
					<dd>
						<input type="text" id="noise_winter_school_headmaster">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>学校薬剤師名</dt>
					<dd>
						<input type="text" placeholder="※必須項目" id="noise_winter_pharmacist">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>検査日時</dt>
					<dd class="selectDate">
						<div class="selectBox year">
							<input type="text" id="noise_winter_date_year">
						</div><span class="inputSubTxt">年</span>
						<div class="selectBox month">
							<input type="text" id="noise_winter_date_month">
						</div><span class="inputSubTxt">月</span>
						<div class="selectBox day">
							<input type="text" id="noise_winter_date_day">
						</div><span class="inputSubTxt">日</span>
						<div class="selectBox yobi">
							<input type="text" id="noise_winter_date_yobi">
						</div><span class="inputSubTxt">曜日</span>
						<input class="datepicker datepickerDisplay" type="text">
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>天候</dt>
					<dd>
						<div class="selectBox">
							<select id="noise_winter_weather">
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
						<input class="unit" type="text" id="noise_winter_temperature"><span class="inputSubTxt">℃</span>
					</dd>
				</dl>
				<dl class="inputItem">
					<dt>風向</dt>
					<dd>
						<div class="selectBox">
							<select id="noise_winter_wind_direction">
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
			</div>
		</div>
		<div class="noiseBox">
			<div class="inputItemBox01">
				<div class="inputItemList01">
					<dl class="inputItem">
						<dt>教室名</dt>
						<dd>
							<input class="unit" type="text" id="noise_winter_grade"><span class="inputSubTxt">年</span>
							<input class="unit" type="text" id="noise_winter_class"><span class="inputSubTxt">組</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>測定位置</dt>
						<dd>
							<input class="unit" type="text" id="noise_winter_position_floor"><span class="inputSubTxt">階</span>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="noise_winter_position_select_rd" value="窓側" id="noise_winter_position_select_01">
									<label for="noise_winter_position_select_01">窓側</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_position_select_rd" value="廊下側" id="noise_winter_position_select_02">
									<label for="noise_winter_position_select_02">廊下側</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>測定器</dt>
						<dd>
							<input type="text" id="noise_winter_instrument">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>窓の材質</dt>
						<dd>
							<input type="text" id="noise_winter_window_material">
						</dd>
					</dl>
				</div>
			</div>
			<div class="inputItemBox02">
				<div class="inputItemList02">
					<dl class="inputItem">
						<dt>二重窓などの防音設備</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="noise_winter_soundproof_rd" value="有" id="noise_winter_soundproof_01">
									<label for="noise_winter_soundproof_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_soundproof_rd" value="無" id="noise_winter_soundproof_02">
									<label for="noise_winter_soundproof_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>強制換気設備の有無</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="noise_winter_ventilation_rd" value="有" id="noise_winter_ventilation_01">
									<label for="noise_winter_ventilation_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_ventilation_rd" value="無" id="noise_winter_ventilation_02">
									<label for="noise_winter_ventilation_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
				</div>
			</div>
			<div class="inputItemBox03">
				<div class="inputItemList03">
					<dl class="inputItem">
						<dt>学校周辺に特殊な騒音源が</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="noise_winter_source_rd" value="ある" id="noise_winter_source_01">
									<label for="noise_winter_source_01">ある</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_source_rd" value="ない" id="noise_winter_source_02">
									<label for="noise_winter_source_02">ない</label>
								</li>
							</ul><span class="inputSubTxt particular">ある場合には具体的に</span>
							<input class="unit" type="text" id="noise_winter_source_particular">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>航空機の騒音で授業が中断することが</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="noise_winter_airplane_rd" value="良くある" id="noise_winter_airplane_01">
									<label for="noise_winter_airplane_01">良くある</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_airplane_rd" value="たまにある" id="noise_winter_airplane_02">
									<label for="noise_winter_airplane_02">たまにある</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_airplane_rd" value="ない" id="noise_winter_airplane_03">
									<label for="noise_winter_airplane_03">ない</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>測定時の最大音は何の音であったか</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="noise_winter_maximum_rd" value="自動車" id="noise_winter_maximum_01">
									<label for="noise_winter_maximum_01">自動車</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_maximum_rd" value="列車" id="noise_winter_maximum_02">
									<label for="noise_winter_maximum_02">列車</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_maximum_rd" value="航空機" id="noise_winter_maximum_03">
									<label for="noise_winter_maximum_03">航空機</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_maximum_rd" value="工事" id="noise_winter_maximum_04">
									<label for="noise_winter_maximum_04">工事</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_maximum_rd" value="別教室から" id="noise_winter_maximum_05">
									<label for="noise_winter_maximum_05">別教室から</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="noise_winter_maximum_rd" value="その他" id="noise_winter_maximum_06">
									<label for="noise_winter_maximum_06">その他</label>
								</li>
							</ul>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<?php
			$noise_winter_close_hour = get_field('noise_winter_close_measuring_hour');
			$noise_winter_open_hour = get_field('noise_winter_open_measuring_hour');
			$display_close = !empty($noise_winter_close_hour);
			$display_open = !empty($noise_winter_open_hour);
		?>
		<div class="registNoiseTable">
			<table>
				<thead>
					<tr>
						<th colspan="2">測定場所</th>
						<th>測定時間</th>
						<th>等価騒音レベル</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="classroom" rowspan="2">教室内</th>
						<th>窓閉鎖</th>
						<td>
							<?php if ($display_close): ?>
								<div class="inputWindowCnt">
									<div class="inputWindowBox">
										<input class="inputWindow" type="text" maxlength="2" id="noise_winter_close_measuring_hour"><span>:</span>
										<input class="inputWindow" type="text" maxlength="2" id="noise_winter_close_measuring_minutes">
									</div>
									<input type="hidden" id="noise_winter_close_measuring_time" value="<?php echo esc_attr($noise_winter_close_time); ?>">
									<p>~</p>
									<div class="inputWindowBox">
										<input class="inputWindow" type="text" maxlength="2" id="noise_winter_close_measuring_hour_to"><span>:</span>
										<input class="inputWindow" type="text" maxlength="2" id="noise_winter_close_measuring_minutes_to">
									</div>
									<input type="hidden" id="noise_winter_close_measuring_time_to" value="<?php echo esc_attr($noise_winter_close_time_to); ?>">
								</div>
							<?php else: ?>
								<input type="text" id="noise_winter_close_measuring_time" value="<?php echo esc_attr($noise_winter_close_time); ?>" placeholder="HH:MM">
							<?php endif; ?>
						</td>
						<td><span class="inputSubTxt">LAeq</span>
							<input class="unit" type="text" id="noise_winter_close_measuring_level"><span class="inputSubTxt">dB</span>
						</td>
					</tr>
					<tr>
						<th>窓開放</th>
						<td>
							<?php if ($display_open): ?>
								<div class="inputWindowCnt">
									<div class="inputWindowBox">
										<input class="inputWindow" type="text" maxlength="2" id="noise_winter_open_measuring_hour"><span>:</span>
										<input class="inputWindow" type="text" maxlength="2" id="noise_winter_open_measuring_minutes">
									</div>
									<input type="hidden" id="noise_winter_open_measuring_time" value="<?php echo esc_attr($noise_winter_open_time); ?>">
									<p>~</p>
									<div class="inputWindowBox">
										<input class="inputWindow" type="text" maxlength="2" id="noise_winter_open_measuring_hour_to"><span>:</span>
										<input class="inputWindow" type="text" maxlength="2" id="noise_winter_open_measuring_minutes_to">
									</div>
									<input type="hidden" id="noise_winter_open_measuring_time_to" value="<?php echo esc_attr($noise_winter_open_time_to); ?>">
								</div>
							<?php else: ?>
								<input type="text" id="noise_winter_open_measuring_time" value="<?php echo esc_attr($noise_winter_open_time); ?>" placeholder="HH:MM">
							<?php endif; ?>
						</td>
						<td><span class="inputSubTxt">LAeq</span>
							<input class="unit" type="text" id="noise_winter_open_measuring_level"><span class="inputSubTxt">dB</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="attentionBox">
			<h3>基準及び事後措置</h3>
			<ul>
				<li>教室内の等価騒音レベルは、窓を閉じているときはLAeq50dB以下、窓を開けているときはLAeq55dB以下であることが望ましい。</li>
				<li>教師の声(全国平均65dB)が、外部騒音によってマスキングされないように注意すること。</li>
				<li>判定基準を超える場合は適当な方法によって、音をさえぎる措置をとるように指導すること。</li>
			</ul>
		</div>
		<div class="attentionBox">
			<h3>測定場所及び記入上の注意</h3>
			<ul>
				<li>学校で校外騒音の影響を最も強く受ける普通教室を選び、教室の中程で騒音の入る側の窓面より1m以内の机上で生徒不在の教室にて窓閉鎖、窓開放の順で2回測定を行い記入すること。</li>
				<li>A特性5分間等価騒音レベル(LAeq)を測定する。</li>
				<li>特定の校外騒音があり授業に影響のある教室がある場合は、騒音源の種類、内容、距離、時間など出来るだけ具体的に記入すること。<br>指導・助言したことを下記に記入すること。1部は本人の控、1部は学校の控とすること。</li>
			</ul>
		</div>
		<p class="ttlCoaching">指導・助言</p>
		<textarea id="noise_winter_coaching"></textarea>
	</div>
	<div class="btnListBox">
		<button class="btnSubmit">登録する</button>
		<button class="btnPrint">印刷する</button>
	</div>
</main>
<?php echo do_shortcode('[wpuf_edit]'); ?>
<script>
	$(document).ready(function() {

		setSchoolSelect('noise_winter_ward', 'noise_winter_ward_id', 'noise_winter_school_type');

		$('.wpuf-fields input[type="text"], .wpuf-fields textarea').each(function(index, element) {
			let id = $(element).attr('name');
			$('#' + id).val($(element).val());
		});

        const obj = document.getElementById('noise_winter_ward');
        const obj_ward_id = document.getElementById('noise_winter_ward_id');
        let index = obj.selectedIndex;
        let select_ward = ('00' + index).slice(-2);
        let key = Number(index)-1;
        $.getJSON('/membersite/aggregate/wp-content/themes/nagoya-yakuzaishi-aggregate/js/school_list_front.json', function(data) {
            for(var i=0; i<data[key][select_ward].school.length; i++){
                $('.select_school').append('<option value="'+data[key][select_ward].school[i].name+'" data-type="'+data[key][select_ward].school[i].type+'">'+data[key][select_ward].school[i].name+'</option>');
            }
        });
        obj_ward_id.value = select_ward;
        setTimeout(function(){
	        $('.select_school').val($('#noise_winter_school_name_561').val());
	    },100);

		$('.wpuf-fields input[type="radio"]:checked').each(function(index, element) {
			let name = $(element).attr('name');
			$(".formBox input[name='" + name + '_rd' + "'][value='" + $(element).val() + "']").prop('checked', true);
		});

		let today = new Date();
		let year = today.getFullYear();
		let month = today.getMonth() + 1;
		let day = today.getDate();
		let title = '教室の騒音定期検査表(冬季)';
		let ward,
			school;

		$('#category').val('10');

		$('.btnSubmit').on('click', function() {

			$('.formBox input, .formBox select, textarea').each(function(index, element) {
				let id = $(element).attr('id');
				let parents = $(element).parents('.inputItem').find("dt").text();
				console.log(parents + '\n' + id);
			});

			ward = $('#noise_winter_ward').val();
			school = $('#noise_winter_school_name').val();
			title += '[' + ward + '区]';
			title += '[' + school + ']';
			title += '[' + year + '年' + month + '月' + day + '日' + ']';

			$('#post_title_561').val(title);

			$('.formBox input[type="text"], .formBox select, .formBox textarea, .formBox input[type="hidden"]').each(function(index, element) {
				let id = $(element).attr('id');
				$('#' + id + '_561').val($(element).val());
			});

			$('.formBox input[type="radio"]:checked').each(function(index, element) {
				let name = $(element).attr('name').slice(0, -3);
				$("input[name='" + name + "'][value='" + $(element).val() + "']").prop('checked', true);
			});

			$('.wpuf-submit-button').click();
		});

		$('.registNoiseTable .unit').on('input', function() {
            var validValue = this.value.match(/^\d*\.?\d{0,1}/);
            this.value = validValue ? validValue[0] : '';
        });

		// 窓閉鎖の開始時間入力に対する処理
		$('#noise_winter_close_measuring_hour, #noise_winter_close_measuring_minutes').on('input', function() {
			var hour = $('#noise_winter_close_measuring_hour').val();
			var minute = $('#noise_winter_close_measuring_minutes').val();
			var formattedTime = (hour ? hour : "00") + ":" + (minute ? minute : "00");
			$('#noise_winter_close_measuring_time').val(formattedTime);
		});

		// 窓閉鎖の終了時間入力に対する処理
		$('#noise_winter_close_measuring_hour_to, #noise_winter_close_measuring_minutes_to').on('input', function() {
			var hour = $('#noise_winter_close_measuring_hour_to').val();
			var minute = $('#noise_winter_close_measuring_minutes_to').val();
			var formattedTime = (hour ? hour : "00") + ":" + (minute ? minute : "00");
			$('#noise_winter_close_measuring_time_to').val(formattedTime);
		});

		// 窓開放の開始時間入力に対する処理
		$('#noise_winter_open_measuring_hour, #noise_winter_open_measuring_minutes').on('input', function() {
			var hour = $('#noise_winter_open_measuring_hour').val();
			var minute = $('#noise_winter_open_measuring_minutes').val();
			var formattedTime = (hour ? hour : "00") + ":" + (minute ? minute : "00");
			$('#noise_winter_open_measuring_time').val(formattedTime);
		});

		// 窓開放の終了時間入力に対する処理
		$('#noise_winter_open_measuring_hour_to, #noise_winter_open_measuring_minutes_to').on('input', function() {
			var hour = $('#noise_winter_open_measuring_hour_to').val();
			var minute = $('#noise_winter_open_measuring_minutes_to').val();
			var formattedTime = (hour ? hour : "00") + ":" + (minute ? minute : "00");
			$('#noise_winter_open_measuring_time_to').val(formattedTime);
		});
	});
</script>