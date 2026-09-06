<?php
/*
Template Name: 学校水泳プール水質定期検査表
*/
?>

<?php get_header(); ?>
	<!-- ▽メイン▽-->
	<div class="topicPath">
		<div class="inner">
			<ol>
				<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li><a href="<?php echo home_url(); ?>/record_list/">検査表の記入 一覧</a></li>
				<li>学校水泳プール水質定期検査表</li>
			</ol>
			<div class="userBox">
				<p>ようこそ 会員さん</p>
			</div>
		</div>
	</div>
	<main class="registRecordMain" id="registPool">
		<h2>学校水泳プール水質定期検査表</h2>
		<div class="formBox">
			<div class="wardBox">
				<dl class="inputItem">
					<dt>区選択</dt>
					<dd>
						<div class="selectBox">
							<select class="select_ward" id="pool_ward">
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
						<input type="hidden" id="pool_ward_id">
					</dd>
				</dl>
			</div>
			<div class="schoolInfoBox">
				<div class="inputItemList">
					<dl class="inputItem">
						<dt>学校名</dt>
						<dd>
							<div class="selectBox">
								<select class="select_school" id="pool_school_name">
									<option value="">選択してください</option>
								</select>
							</div>
							<input type="hidden" id="pool_school_type">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>校長名</dt>
						<dd>
							<input type="text" id="pool_school_headmaster">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>学校薬剤師名</dt>
						<dd>
							<input type="text" placeholder="※必須項目" id="pool_pharmacist">
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>プール開始日</dt>
						<dd class="selectDate">
							<div class="selectBox year">
								<select id="pool_start_year">
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
								<select id="pool_start_month">
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
								<select id="pool_start_day">
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
								<select id="pool_start_yobi">
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
						<dt>終了予定日</dt>
						<dd class="selectDate">
							<div class="selectBox year">
								<select id="pool_end_year">
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
								<select id="pool_end_month">
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
								<select id="pool_end_day">
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
								<select id="pool_end_yobi">
									<option value="">選択</option>
									<option value="月">月</option>
									<option value="火">火</option>
									<option value="水">水</option>
									<option value="木">木</option>
									<option value="金">金</option>
									<option value="土">土</option>
									<option value="日">日</option>
								</select>
							</div>
						</dd>
					</dl>
					<dl class="inputItem useDays">
						<dt>実質使用日数</dt>
						<dd><span class="inputSubTxt">約</span>
							<input type="text" id="pool_use_days"><span class="inputSubTxt">日間</span>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>プールの大きさ</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="pool_size_rd" value="250t以下" id="pool_size_01">
									<label for="pool_size_01">250t以下</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="pool_size_rd" value="300t以下" id="pool_size_02">
									<label for="pool_size_02">300t以下</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="pool_size_rd" value="300t以上" id="pool_size_03">
									<label for="pool_size_03">300t以上</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>ろ過方式</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="pool_filter_rd" value="砂ろ過" id="pool_filter_01">
									<label for="pool_filter_01">砂ろ過</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="pool_filter_rd" value="その他" id="pool_filter_02">
									<label for="pool_filter_02">その他</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>プールの設置場</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="pool_place_rd" value="地上" id="pool_place_01">
									<label for="pool_place_01">地上</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="pool_place_rd" value="屋上" id="pool_place_02">
									<label for="pool_place_02">屋上</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>主消毒用薬剤</dt>
						<dd>
							<ul class="radioList">
								<li class="redioBtn">
									<input type="radio" name="pool_disinfectant_rd" value="ica" id="pool_disinfectant_01">
									<label for="pool_disinfectant_01">ICA</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="pool_disinfectant_rd" value="次亜液" id="pool_disinfectant_02">
									<label for="pool_disinfectant_02">次亜液</label>
								</li>
								<li class="redioBtn">
									<input type="radio" name="pool_disinfectant_rd" value="その他" id="pool_disinfectant_03">
									<label for="pool_disinfectant_03">その他</label>
								</li>
							</ul>
						</dd>
					</dl>
					<dl class="inputItem">
						<dt>衛生管理者名</dt>
						<dd>
							<input type="text" placeholder="※必須項目" id="pool_supervisor">
						</dd>
					</dl>
				</div>
			</div>
			<div class="registPoolTable">
				<table>
					<thead>
						<tr>
							<th colspan="2">&nbsp;</th>
							<th>プール開始直後</th>
							<th>&nbsp;</th>
							<th>7月下旬</th>
							<th>&nbsp;</th>
							<th>9月初旬</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">検査月日</th>
							<td>
								<div class="selectDate">
									<div class="selectBox month">
										<select id="pool_exam_first_month_1">
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
										<select id="pool_exam_first_day_1">
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
								</div>
							</td>
							<td>
								<div class="selectDate">
									<div class="selectBox month">
										<select id="pool_exam_first_month_2">
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
										<select id="pool_exam_first_day_2">
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
								</div>
							</td>
							<td>
								<div class="selectDate">
									<div class="selectBox month">
										<select id="pool_exam_second_month_1">
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
										<select id="pool_exam_second_day_1">
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
								</div>
							</td>
							<td>
								<div class="selectDate">
									<div class="selectBox month">
										<select id="pool_exam_second_month_2">
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
										<select id="pool_exam_second_day_2">
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
								</div>
							</td>
							<td>
								<div class="selectDate">
									<div class="selectBox month">
										<select id="pool_exam_third_month">
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
										<select id="pool_exam_third_day">
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
								</div>
							</td>
						</tr>
						<tr>
							<th colspan="2">検査時刻</th>
							<td>
								<input type="text" placeholder="13:00" id="pool_exam_time_first_1">
							</td>
							<td>
								<input type="text" placeholder="13:00" id="pool_exam_time_first_2">
							</td>
							<td>
								<input type="text" placeholder="13:00" id="pool_exam_time_second_1">
							</td>
							<td>
								<input type="text" placeholder="13:00" id="pool_exam_time_second_2">
							</td>
							<td>
								<input type="text" placeholder="13:00" id="pool_exam_time_third">
							</td>
						</tr>
						<tr>
							<th colspan="2">天候</th>
							<td>
								<div class="selectBox">
									<select id="pool_weather_first_1">
										<option>選択</option>
										<option>晴</option>
										<option>曇</option>
										<option>雨</option>
										<option>雪</option>
									</select>
								</div>
							</td>
							<td>
								<div class="selectBox">
									<select id="pool_weather_first_2">
										<option>選択</option>
										<option>晴</option>
										<option>曇</option>
										<option>雨</option>
										<option>雪</option>
									</select>
								</div>
							</td>
							<td>
								<div class="selectBox">
									<select id="pool_weather_second_1">
										<option>選択</option>
										<option>晴</option>
										<option>曇</option>
										<option>雨</option>
										<option>雪</option>
									</select>
								</div>
							</td>
							<td>
								<div class="selectBox">
									<select id="pool_weather_second_2">
										<option>選択</option>
										<option>晴</option>
										<option>曇</option>
										<option>雨</option>
										<option>雪</option>
									</select>
								</div>
							</td>
							<td>
								<div class="selectBox">
									<select id="pool_weather_third">
										<option>選択</option>
										<option>晴</option>
										<option>曇</option>
										<option>雨</option>
										<option>雪</option>
									</select>
								</div>
							</td>
						</tr>
						<tr class="temperature">
							<th colspan="2">気温</th>
							<td>
								<input type="text" id="pool_temperature_first_1"><span class="inputSubTxt">℃</span>
							</td>
							<td>
								<input type="text" id="pool_temperature_first_2"><span class="inputSubTxt">℃</span>
							</td>
							<td>
								<input type="text" id="pool_temperature_second_1"><span class="inputSubTxt">℃</span>
							</td>
							<td>
								<input type="text" id="pool_temperature_second_2"><span class="inputSubTxt">℃</span>
							</td>
							<td>
								<input type="text" id="pool_temperature_third"><span class="inputSubTxt">℃</span>
							</td>
						</tr>
						<tr class="temperature">
							<th colspan="2">水温</th>
							<td>
								<input type="text" id="pool_water_temperature_first_1"><span class="inputSubTxt">℃</span>
							</td>
							<td>
								<input type="text" id="pool_water_temperature_first_2"><span class="inputSubTxt">℃</span>
							</td>
							<td>
								<input type="text" id="pool_water_temperature_second_1"><span class="inputSubTxt">℃</span>
							</td>
							<td>
								<input type="text" id="pool_water_temperature_second_2"><span class="inputSubTxt">℃</span>
							</td>
							<td>
								<input type="text" id="pool_water_temperature_third"><span class="inputSubTxt">℃</span>
							</td>
						</tr>
						<tr>
							<th colspan="2">ph値</th>
							<td>
								<input type="text" id="pool_ph_first_1">
							</td>
							<td>
								<input type="text" id="pool_ph_first_2">
							</td>
							<td>
								<input type="text" id="pool_ph_second_1">
							</td>
							<td>
								<input type="text" id="pool_ph_second_2">
							</td>
							<td>
								<input type="text" id="pool_ph_third">
							</td>
						</tr>
						<tr class="amount">
							<th colspan="2">残留塩素量</th>
							<td>
								<input type="text" id="pool_chlorine_first_1"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_chlorine_first_2"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_chlorine_second_1"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_chlorine_second_2"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_chlorine_third"><span class="inputSubTxt">mg/ℓ</span>
							</td>
						</tr>
						<tr>
							<th class="row" rowspan="2">ブイヨン</th>
							<th>一般細菌</th>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_general_bacteria_first_1_rd" value="異常なし" id="general_bacteria_01_1">
										<label for="general_bacteria_01_1">異常なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_general_bacteria_first_1_rd" value="あり" id="general_bacteria_01_2">
										<label for="general_bacteria_01_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_general_bacteria_first_2_rd" value="異常なし" id="general_bacteria_02_1">
										<label for="general_bacteria_02_1">異常なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_general_bacteria_first_2_rd" value="あり" id="general_bacteria_02_2">
										<label for="general_bacteria_02_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_general_bacteria_second_1_rd" value="異常なし" id="general_bacteria_03_1">
										<label for="general_bacteria_03_1">異常なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_general_bacteria_second_1_rd" value="あり" id="general_bacteria_03_2">
										<label for="general_bacteria_03_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_general_bacteria_second_2_rd" value="異常なし" id="general_bacteria_04_1">
										<label for="general_bacteria_04_1">異常なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_general_bacteria_second_2_rd" value="あり" id="general_bacteria_04_2">
										<label for="general_bacteria_04_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_general_bacteria_third_rd" value="異常なし" id="general_bacteria_05_1">
										<label for="general_bacteria_05_1">異常なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_general_bacteria_third_rd" value="あり" id="general_bacteria_05_2">
										<label for="general_bacteria_05_2">あり</label>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>大腸菌</th>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_bacteria_coliform_first_1_rd" value="検出なし" id="bacteria_coliform_01_1">
										<label for="bacteria_coliform_01_1">検出なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_bacteria_coliform_first_1_rd" value="あり" id="bacteria_coliform_01_2">
										<label for="bacteria_coliform_01_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_bacteria_coliform_first_2_rd" value="検出なし" id="bacteria_coliform_02_1">
										<label for="bacteria_coliform_02_1">検出なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_bacteria_coliform_first_2_rd" value="あり" id="bacteria_coliform_02_2">
										<label for="bacteria_coliform_02_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_bacteria_coliform_second_1_rd" value="検出なし" id="bacteria_coliform_03_1">
										<label for="bacteria_coliform_03_1">検出なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_bacteria_coliform_second_1_rd" value="あり" id="bacteria_coliform_03_2">
										<label for="bacteria_coliform_03_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_bacteria_coliform_second_2_rd" value="検出なし" id="bacteria_coliform_04_1">
										<label for="bacteria_coliform_04_1">検出なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_bacteria_coliform_second_2_rd" value="あり" id="bacteria_coliform_04_2">
										<label for="bacteria_coliform_04_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_bacteria_coliform_third_rd" value="検出なし" id="bacteria_coliform_05_1">
										<label for="bacteria_coliform_05_1">検出なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_bacteria_coliform_third_rd" value="あり" id="bacteria_coliform_05_2">
										<label for="bacteria_coliform_05_2">あり</label>
									</li>
								</ul>
							</td>
						</tr>
						<tr class="amount">
							<th colspan="2">有機物等</th>
							<td>
								<input type="text" id="pool_organic_matter_first_1"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_organic_matter_first_2"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_organic_matter_second_1"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_organic_matter_second_2"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_organic_matter_third"><span class="inputSubTxt">mg/ℓ</span>
							</td>
						</tr>
						<tr class="amount">
							<th colspan="2">総トリハロメタン</th>
							<td>
								<input type="text" id="pool_trihalomethane_first_1"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_trihalomethane_first_2"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_trihalomethane_second_1"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_trihalomethane_second_2"><span class="inputSubTxt">mg/ℓ</span>
							</td>
							<td>
								<input type="text" id="pool_trihalomethane_third"><span class="inputSubTxt">mg/ℓ</span>
							</td>
						</tr>
						<tr>
							<th colspan="2">濁度</th>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_turbidity_first_1_rd" value="異常なし" id="turbidity_01_1">
										<label for="turbidity_01_1">異常なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_turbidity_first_1_rd" value="あり" id="turbidity_01_2">
										<label for="turbidity_01_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_turbidity_first_2_rd" value="異常なし" id="turbidity_02_1">
										<label for="turbidity_02_1">異常なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_turbidity_first_2_rd" value="あり" id="turbidity_02_2">
										<label for="turbidity_02_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_turbidity_second_1_rd" value="異常なし" id="turbidity_03_1">
										<label for="turbidity_03_1">異常なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_turbidity_second_1_rd" value="あり" id="turbidity_03_2">
										<label for="turbidity_03_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_turbidity_second_2_rd" value="異常なし" id="turbidity_04_1">
										<label for="turbidity_04_1">異常なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_turbidity_second_2_rd" value="あり" id="turbidity_04_2">
										<label for="turbidity_04_2">あり</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_turbidity_third_rd" value="異常なし" id="turbidity_05_1">
										<label for="turbidity_05_1">異常なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_turbidity_third_rd" value="あり" id="turbidity_05_2">
										<label for="turbidity_05_2">あり</label>
									</li>
								</ul>
							</td>
						</tr>
						<tr class="deposition">
							<th colspan="2">沈殿物・浮遊物</th>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_deposition_first_1_rd" value="無" id="deposition_01_1">
										<label for="deposition_01_1">無</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_deposition_first_1_rd" value="有" id="deposition_01_2">
										<label for="deposition_01_2">有</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_deposition_first_2_rd" value="無" id="deposition_02_1">
										<label for="deposition_02_1">無</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_deposition_first_2_rd" value="有" id="deposition_02_2">
										<label for="deposition_02_2">有</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_deposition_second_1_rd" value="無" id="deposition_03_1">
										<label for="deposition_03_1">無</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_deposition_second_1_rd" value="有" id="deposition_03_2">
										<label for="deposition_03_2">有</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_deposition_second_2_rd" value="無" id="deposition_04_1">
										<label for="deposition_04_1">無</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_deposition_second_2_rd" value="有" id="deposition_04_2">
										<label for="deposition_04_2">有</label>
									</li>
								</ul>
							</td>
							<td>
								<ul class="radioList">
									<li class="redioBtn">
										<input type="radio" name="pool_deposition_third_rd" value="無" id="deposition_05_1">
										<label for="deposition_05_1">無</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_deposition_third_rd" value="有" id="deposition_05_2">
										<label for="deposition_05_2">有</label>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th colspan="2">遊泳人数</th>
							<td>
								<input type="text" id="pool_people_first_1">
							</td>
							<td>
								<input type="text" id="pool_people_first_2">
							</td>
							<td>
								<input type="text" id="pool_people_second_1">
							</td>
							<td>
								<input type="text" id="pool_people_second_2">
							</td>
							<td>
								<input type="text" id="pool_people_third">
							</td>
						</tr>
						<tr>
							<th colspan="2">ろ過器出口の濁度</th>
							<td>
								<input type="text" id="pool_turbidity_exit_first_1">
							</td>
							<td>
								<input type="text" id="pool_turbidity_exit_first_2">
							</td>
							<td>
								<input type="text" id="pool_turbidity_exit_second_1">
							</td>
							<td>
								<input type="text" id="pool_turbidity_exit_second_2">
							</td>
							<td>
								<input type="text" id="pool_turbidity_exit_third">
							</td>
						</tr>
						<tr>
							<th colspan="2">全換水回数</th>
							<td colspan="3">
								<ul class="radioList water_change">
									<li class="redioBtn">
										<input type="radio" name="pool_water_change_rd" value="なし" id="water_change_01">
										<label for="water_change_01">なし</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_water_change_rd" value="1回" id="water_change_02">
										<label for="water_change_02">1回</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_water_change_rd" value="2回" id="water_change_03">
										<label for="water_change_03">2回</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_water_change_rd" value="3回以上" id="water_change_04">
										<label for="water_change_04">3回以上</label>
									</li>
								</ul>
							</td>
							<th>温水シャワー</th>
							<td>
								<ul class="radioList water_change">
									<li class="redioBtn">
										<input type="radio" name="pool_shower_rd" value="無" id="shower_01">
										<label for="shower_01">無</label>
									</li>
									<li class="redioBtn">
										<input type="radio" name="pool_shower_rd" value="有" id="shower_02">
										<label for="shower_02">有</label>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="attentionBox">
				<div class="left">
					<h3>基準及び事後処置</h3>
					<ul>
						<li>pH値は5.8～8.6 の範囲、濁度は2度、有機物等(カメレオン消費量は、12mg/ℓを超え　てはならない。</li>
						<li>残留塩素は、遊離残留塩素において、0.4mg/ℓ以上1.0mg/ℓ以下が望ましぃ。水温　は22℃以上27℃以下で24℃ が最適である。水温が21℃以下では入泳させてはならな　い。</li>
						<li>水温と気温の差は2℃以上8℃以下が望ましい。</li>
						<li>大腸菌は、検出されてはならない。</li>
						<li>一般細菌は1mℓΨ200コロニー以下であること。</li>
						<li>塩素消毒の方法又は設備、水の浄化設備又はその管理状況に欠陥があるときは直ちに　改善する。</li>
						<li>水質が不良の時は、その原因を追求し適切な措置を講ずる。</li>
						<li>入場者の管理が不良の時は、すみやかに管理を強化する。</li>
						<li>水は限られた大切な資源である。オーバーフローなど活用して全換水を避け、学校薬　剤師に相談の上全換水すること。</li>
						<li>総トリハロメタンは0.2mg/ℓ以下に保つこと。</li>
					</ul>
				</div>
				<div class="right">
					<h3>記入上の注意</h3>
					<ul>
						<li>必ずプール使用中に検査を行うこと。</li>
						<li>pH、水温、残留塩素などは、所定の箇所で測定しその平均を記入すること。</li>
						<li>濁度は、肉眼で観察して記入し、測定用具を使用しなくても良い。</li>
						<li>遊泳人数は、当日の使用人数を記入のこと。</li>
						<li>万一プール水質が基準外であった場合は、直ちに原因を糾明し再検査をして、その　結果を穀告書に記入すること。</li>
						<li>指導・助言したことを下記へ記入すること。</li>
						<li>プールの消毒薬品等の処分については、学校薬剤師に必ず相談すること。</li>
						<li>循環ろ過装置の出口における処理水の濁度は、0.5度以下であること。(0.1 度以下　が望ましい)</li>
						<li>1部は本人の控、1部は学校の控、1部は集計用に支部長に提出すること。</li>
					</ul>
				</div>
			</div>
			<textarea placeholder="指導・助言" id="pool_coaching"></textarea>
		</div>
		<div class="btnListBox">
			<button class="btnSubmit">登録する</button>
			<button class="btnPrint">印刷する</button>
		</div>
		<?php echo do_shortcode('[wpuf_form id="11"]'); ?>
	</main>
	<!-- △メイン△-->
	<script>
		$(document).ready(function() {

			setSchoolSelect('pool_ward', 'pool_ward_id', 'pool_school_type');

			let today = new Date();
			let year = today.getFullYear();
			let month = today.getMonth() + 1;
			let day = today.getDate();
			let title = '学校水泳プール水質定期検査表';
			let ward,
				school;

			$('#category').val('2');

			$('.btnSubmit').on('click', function() {
				ward = $('#pool_ward').val();
				school = $('#pool_school_name').val();
				title += '[' + ward + '区]';
				title += '[' + school + ']';
				title += '[' + year + '年' + month + '月' + day + '日' + ']';
				$('#post_title_11').val(title);

				$('.formBox input[type="text"], .formBox select, .formBox textarea, .formBox input[type="hidden"]').each(function(index, element) {
					let id = $(element).attr('id');
					$('#' + id + '_11').val($(element).val());
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