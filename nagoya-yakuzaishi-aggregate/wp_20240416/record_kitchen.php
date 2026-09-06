<?php
/*
Template Name: 給食調理場衛生検査表
*/
?>

<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<div class="topicPath">
		<div class="inner">
			<ol>
				<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li><a href="<?php echo home_url(); ?>/record_list/">検査表の記入 一覧</a></li>
				<li>給食調理場衛生検査表</li>
			</ol>
			<div class="userBox">
				<p>ようこそ 会員さん</p>
			</div>
		</div>
	</div>
	<main class="registRecordMain" id="registKitchen">
		<h2>給食調理場衛生検査表</h2>
		<div class="formBox">
			<div class="wardBox">
				<dl class="inputItem">
					<dt>区選択</dt>
					<dd>
						<div class="selectBox">
							<select class="select_ward" id="kitchen_ward">
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
						<input type="hidden" id="kitchen_ward_id">
					</dd>
				</dl>
			</div>
			<div class="schoolInfoBox">
				<div class="inputItemList">
					<dl class="inputItem">
						<dt>学校名</dt>
						<dd>
							<div class="selectBox">
								<select class="select_school" id="kitchen_school_name">
									<option value="">選択してください</option>
								</select>
							</div>
							<input type="hidden" id="kitchen_school_type">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>校長名</dt>
						<dd>
							<input type="text" id="kitchen_school_headmaster">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>学校薬剤師名</dt>
						<dd>
							<input type="text" id="kitchen_pharmacist">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>検査日時</dt>
						<dd class="selectDate">
							<div class="selectBox year">
								<input type="text" id="kitchen_date_year">
							</div><span class="inputSubTxt">年</span>
							<div class="selectBox month">
								<input type="text" id="kitchen_date_month">
							</div><span class="inputSubTxt">月</span>
							<div class="selectBox day">
								<input type="text" id="kitchen_date_day">
							</div><span class="inputSubTxt">日</span>
							<div class="selectBox yobi">
								<input type="text" id="kitchen_date_yobi">
							</div><span class="inputSubTxt">曜日</span>
							<input class="datepicker datepickerDisplay" type="text">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>日常点検の記録</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_record_rd" value="有" id="kitchen_is_record_01">
									<label for="kitchen_is_record_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_record_rd" value="無" id="kitchen_is_record_02">
									<label for="kitchen_is_record_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>乾湿計</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_sychrometer_rd" value="有" id="kitchen_is_sychrometer_01">
									<label for="kitchen_is_sychrometer_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_sychrometer_rd" value="無" id="kitchen_is_sychrometer_02">
									<label for="kitchen_is_sychrometer_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>専用便所</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_toilet_rd" value="有" id="kitchen_is_toilet_01">
									<label for="kitchen_is_toilet_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_toilet_rd" value="無" id="kitchen_is_toilet_02">
									<label for="kitchen_is_toilet_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>専用休憩室</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_restroom_rd" value="有" id="kitchen_is_restroom_01">
									<label for="kitchen_is_restroom_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_restroom_rd" value="無" id="kitchen_is_restroom_02">
									<label for="kitchen_is_restroom_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>専用シャワー</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_shower_rd" value="有" id="kitchen_is_shower_01">
									<label for="kitchen_is_shower_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_shower_rd" value="無" id="kitchen_is_shower_02">
									<label for="kitchen_is_shower_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>手洗消毒器</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_sterilizer_rd" value="有" id="kitchen_is_sterilizer_01">
									<label for="kitchen_is_sterilizer_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_sterilizer_rd" value="無" id="kitchen_is_sterilizer_02">
									<label for="kitchen_is_sterilizer_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>消毒薬品</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_disinfectant_rd" value="有" id="kitchen_is_disinfectant_01">
									<label for="kitchen_is_disinfectant_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_disinfectant_rd" value="無" id="kitchen_is_disinfectant_02">
									<label for="kitchen_is_disinfectant_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>ツメブラシ</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_brush_rd" value="有" id="kitchen_is_brush_01">
									<label for="kitchen_is_brush_01">有</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="kitchen_is_brush_rd" value="無" id="kitchen_is_brush_02">
									<label for="kitchen_is_brush_02">無</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>換気扇</dt>
						<dd>
							<input class="unitFan" type="text" id="kitchen_fan_size"><span class="inputSubTxt">㎝</span>
							<input class="unitFan" type="text" id="kitchen_fan_num"><span class="inputSubTxt">台</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>温度</dt>
						<dd>
							<input class="unit" type="text" id="kitchen_temperature"><span class="inputSubTxt">℃</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>湿度</dt>
						<dd>
							<input class="unit" type="text" id="kitchen_humidity"><span class="inputSubTxt">% </span>
						</dd>
					</dl>
				</div>
			</div>
			<div class="registKitchenTable">
				<h3>食器について</h3>
				<table class="tableware">
					<thead>
						<tr>
							<th>&nbsp;</th>
							<th>パン皿</th>
							<th>中食器</th>
							<th>小食器・その他</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>材質</th>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_pan_rd" value="樹脂" id="kitchen_material_pan_01">
										<label for="kitchen_material_pan_01">樹脂</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_pan_rd" value="金属" id="kitchen_material_pan_02">
										<label for="kitchen_material_pan_02">金属</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_pan_rd" value="磁器" id="kitchen_material_pan_03">
										<label for="kitchen_material_pan_03">磁器</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_pan_rd" value="その他" id="kitchen_material_pan_04">
										<label for="kitchen_material_pan_04">その他</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_mid_rd" value="樹脂" id="kitchen_material_mid_01">
										<label for="kitchen_material_mid_01">樹脂</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_mid_rd" value="金属" id="kitchen_material_mid_02">
										<label for="kitchen_material_mid_02">金属</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_mid_rd" value="磁器" id="kitchen_material_mid_03">
										<label for="kitchen_material_mid_03">磁器</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_mid_rd" value="その他" id="kitchen_material_mid_04">
										<label for="kitchen_material_mid_04">その他</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_small_rd" value="樹脂" id="kitchen_material_small_01">
										<label for="kitchen_material_small_01">樹脂</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_small_rd" value="金属" id="kitchen_material_small_02">
										<label for="kitchen_material_small_02">金属</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_small_rd" value="磁器" id="kitchen_material_small_03">
										<label for="kitchen_material_small_03">磁器</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_material_small_rd" value="その他" id="kitchen_material_small_04">
										<label for="kitchen_material_small_04">その他</label>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>傷み方</th>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="kitchen_damage_pan_rd" value="a" id="kitchen_damage_pan_01">
										<label for="kitchen_damage_pan_01">A</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_damage_pan_rd" value="b" id="kitchen_damage_pan_02">
										<label for="kitchen_damage_pan_02">B</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_damage_pan_rd" value="c" id="kitchen_damage_pan_03">
										<label for="kitchen_damage_pan_03">C</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="kitchen_damage_mid_rd" value="a" id="kitchen_damage_mid_01">
										<label for="kitchen_damage_mid_01">A</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_damage_mid_rd" value="b" id="kitchen_damage_mid_02">
										<label for="kitchen_damage_mid_02">B</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_damage_mid_rd" value="c" id="kitchen_damage_mid_03">
										<label for="kitchen_damage_mid_03">C</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="kitchen_damage_small_rd" value="a" id="kitchen_damage_small_01">
										<label for="kitchen_damage_small_01">A</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_damage_small_rd" value="b" id="kitchen_damage_small_02">
										<label for="kitchen_damage_small_02">B</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_damage_small_rd" value="c" id="kitchen_damage_small_03">
										<label for="kitchen_damage_small_03">C</label>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>使用年数</th>
							<td><span class="inputSubTxt">約</span>
								<input class="unit" type="text" id="kitchen_use_year_pan"><span class="inputSubTxt">年</span>
							</td>
							<td><span class="inputSubTxt">約</span>
								<input class="unit" type="text" id="kitchen_use_year_mid"><span class="inputSubTxt">年</span>
							</td>
							<td><span class="inputSubTxt">約</span>
								<input class="unit" type="text" id="kitchen_use_year_small"><span class="inputSubTxt">年</span>
							</td>
						</tr>
						<tr>
							<th rowspan="2">残留物検査</th>
							<td><span class="inputSubTxt">澱粉5枚中</span>
								<input class="unitResidue" type="text" id="kitchen_starch_pan"><span class="inputSubTxt">枚</span>
							</td>
							<td><span class="inputSubTxt">澱粉5枚中</span>
								<input class="unitResidue" type="text" id="kitchen_starch_mid"><span class="inputSubTxt">枚</span>
							</td>
							<td><span class="inputSubTxt">澱粉5枚中</span>
								<input class="unitResidue" type="text" id="kitchen_starch_small"><span class="inputSubTxt">枚</span>
							</td>
						</tr>
						<tr>
							<td><span class="inputSubTxt">脂肪5枚中</span>
								<input class="unitResidue" type="text" id="kitchen_fat_pan"><span class="inputSubTxt">枚</span>
							</td>
							<td><span class="inputSubTxt">脂肪5枚中</span>
								<input class="unitResidue" type="text" id="kitchen_fat_mid"><span class="inputSubTxt">枚</span>
							</td>
							<td><span class="inputSubTxt">脂肪5枚中</span>
								<input class="unitResidue" type="text" id="kitchen_fat_small"><span class="inputSubTxt">枚</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="registKitchenTable">
				<h3>マナ板について</h3>
				<table class="board">
					<tbody>
						<tr>
							<th>大腸菌検査</th>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="kitchen_coli_rd" value="検出なし" id="kitchen_coli_01">
										<label for="kitchen_coli_01">検出なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="kitchen_coli_rd" value="あり" id="kitchen_coli_02">
										<label for="kitchen_coli_02">あり</label>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="registKitchenTable">
				<h3>照明について</h3>
				<table class="lighting">
					<thead>
						<tr>
							<th>&nbsp;</th>
							<th>調理室</th>
							<th>配膳室</th>
							<th>食庫</th>
						</tr>
					</thead>
					<tbody>
						<tr class="light">
							<th>照明具</th>
							<td>
								<div class="lightItem">
									<input class="unit decimalUnit" type="text" id="kitchen_light_kitchen_w"><span class="inputSubTxt">W</span>
									<input class="unit" type="text" id="kitchen_light_kitchen_num"><span class="inputSubTxt">本</span>
								</div>
								<div class="lightItem">
									<input class="unit decimalUnit" type="text" id="kitchen_light_kitchen_lm"><span class="inputSubTxt">lm</span>
									<input class="unit" type="text" id="kitchen_light_kitchen_lm_num"><span class="inputSubTxt">本</span>
								</div>
							</td>
							<td>
								<div class="lightItem">
									<input class="unit decimalUnit" type="text" id="kitchen_light_serving_w"><span class="inputSubTxt">W</span>
									<input class="unit" type="text" id="kitchen_light_serving_num"><span class="inputSubTxt">本</span>
								</div>
								<div class="lightItem">
									<input class="unit decimalUnit" type="text" id="kitchen_light_serving_lm"><span class="inputSubTxt">lm</span>
									<input class="unit" type="text" id="kitchen_light_serving_lm_num"><span class="inputSubTxt">本</span>
								</div>
							</td>
							<td>
								<div class="lightItem">
									<input class="unit decimalUnit" type="text" id="kitchen_light_pantry_w"><span class="inputSubTxt">W</span>
									<input class="unit" type="text" id="kitchen_light_pantry_num"><span class="inputSubTxt">本</span>
								</div>
								<div class="lightItem">
									<input class="unit decimalUnit" type="text" id="kitchen_light_pantry_lm"><span class="inputSubTxt">lm</span>
									<input class="unit" type="text" id="kitchen_light_pantry_lm_num"><span class="inputSubTxt">本</span>
								</div>
							</td>
						</tr>
						<tr class="luminosity">
							<th rowspan="2">照度</th>
							<td><span class="inputSubTxt">最大</span>
								<input class="unit" type="text" id="kitchen_luminosity_kitchen_max"><span class="inputSubTxt">lx</span>
							</td>
							<td><span class="inputSubTxt">最大</span>
								<input class="unit" type="text" id="kitchen_luminosity_serving_max"><span class="inputSubTxt">lx</span>
							</td>
							<td><span class="inputSubTxt">最大</span>
								<input class="unit" type="text" id="kitchen_luminosity_pantry_max"><span class="inputSubTxt">lx</span>
							</td>
						</tr>
						<tr class="luminosity">
							<td><span class="inputSubTxt">最小</span>
								<input class="unit" type="text" id="kitchen_luminosity_kitchen_min"><span class="inputSubTxt">lx</span>
							</td>
							<td><span class="inputSubTxt">最小</span>
								<input class="unit" type="text" id="kitchen_luminosity_serving_min"><span class="inputSubTxt">lx</span>
							</td>
							<td><span class="inputSubTxt">最小</span>
								<input class="unit" type="text" id="kitchen_luminosity_pantry_min"><span class="inputSubTxt">lx</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="attentionBox">
				<h3>基準及び記入上の注意</h3>
				<ul>
					<li>学校給食施設設備は、衛生的かつ能率的でなければならない。建物の構造・採光・通風・換気・防そ・防虫、建物の周囲、給排本設備、ちゅうかい容器、清掃用具、便所などに欠陥故障があってはならない。あればすみやかに改善すること。</li>
					<li>基準とは学校環境衛生管理マニュアル104ページ参照のこと。</li>
					<li>残留物検査は材質別に、各皿とも5枚ずつ検査し明らかに陽性なものの枚数を記入すること。</li>
					<li>照度は照明器具を全部点灯して行うこと。調理室は200lx以上、倉庫は75lx以上が望ましい。調理室の温度は25℃以下、湿度は80%以下が望ましい。必ず、清潔な身なりで自衣を着用して調理室に入ること。</li>
					<li>指導・助言したことを下記へ記入すること。1部は本人の控、1部は学校の控、1部は集計用に事務局まで提出すること。</li>
				</ul>
			</div>
			<p class="ttlCoaching">指導・助言</p>
			<textarea id="kitchen_coaching"></textarea>
		</div>
		<div class="btnListBox">
			<button class="btnSubmit">登録する</button>
		</div>
		<?php echo do_shortcode('[wpuf_form id="998"]'); ?>
	</main>
	<!-- △メイン△-->
	<script>
		$(document).ready(function() {

	        setSchoolSelect('kitchen_ward', 'kitchen_ward_id', 'kitchen_school_type');

	        let today = new Date();
	        let year = today.getFullYear();
	        let month = today.getMonth() + 1;
	        let day = today.getDate();
	        let title = '給食調理場衛生検査表(夏季)';
	        let ward,
	            school;

	        $('#category').val('8');

	        $('.btnSubmit').on('click', function() {
				if(!$('.select_ward').val() || !$('.select_school').val()) {
					alert('必須項目が未入力です');
					return
				}
	            ward = $('#kitchen_ward').val();
	            school = $('#kitchen_school_name').val();
	            title += '[' + ward + '区]';
	            title += '[' + school + ']';
	            title += '[' + year + '年' + month + '月' + day + '日' + ']';

	            $('#post_title_998').val(title);

	            $('.formBox input[type="text"], .formBox select, .formBox textarea, .formBox input[type="hidden"]').each(function(index, element) {
	                let id = $(element).attr('id');
	                $('#' + id + '_998').val($(element).val());
	            });

	            $('.formBox input[type="radio"]:checked').each(function(index, element) {
	                let name = $(element).attr('name').slice(0, -3);
	                $("input[name='" + name + "'][value='" + $(element).val() + "']").prop('checked', true);
	            });
	            $('.wpuf-submit-button').click();
	        });

			// 小数点第一位まで入力を許可する設定
			$('.decimalUnit').on('input', function() {
				var validValue = this.value.match(/^\d*\.?\d{0,1}/);
				this.value = validValue ? validValue[0] : '';
			});
	    });
	</script>
<?php get_footer(); ?>