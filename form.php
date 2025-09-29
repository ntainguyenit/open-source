<?php define("PAGE_TITLE", "Form Doanh thu"); ?>
<?php include "layout.php"; ?>
<?php template_header(); ?>

<div class="card p-4 shadow-sm">
	<h2>Thống kê Doanh thu</h2>
	<form action="process_form.php" method="GET">
		<div class="mb-3">
			<label for="thang" class="form-label">Tháng:</label>
			<select name="thang" id="thang" class="form-select" required>
				<option value="">-- Chọn tháng --</option>
				<option value="Jan">Jan</option>
				<option value="Feb">Feb</option>
				<option value="Mar">Mar</option>
				<option value="Apr">Apr</option>
				<option value="May">May</option>
				<option value="Jun">Jun</option>
				<option value="Jul">Jul</option>
				<option value="Aug">Aug</option>
				<option value="Sep">Sep</option>
				<option value="Oct">Oct</option>
				<option value="Nov">Nov</option>
				<option value="Dec">Dec</option>
			</select>
		</div>

		<div class="mb-3">
			<label for="thongke" class="form-label">Thống kê doanh thu:</label>
			<select name="thongke" id="thongke" class="form-select" required>
				<option value="">-- Chọn thống kê --</option>
				<option value="max">Doanh thu cao nhất</option>
				<option value="min">Doanh thu thấp nhất</option>
			</select>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<?php template_footer(); ?>