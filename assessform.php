<?php include("header.php"); ?>
		<div class="titlename" data-title="Assessment Page" id="assessform_page">
			<div id="header">
				<h1>Assessment</h1>
			</div>

			<br />

			<form id="assessform" action="assessment.php" method="post" enctype="application/x-www-form-urlencoded" name="assessform">
				<div data-test-num="1">
					<label data-tab-row="objname">First Value: </label>
					<select autofocus="autofocus" name="status1">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer1" value="" />
					<input type="text" name="denom1" value="" />
					<textarea name="comments1" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="2">
					<label data-tab-row="objname">Second Value: </label>
					<select name="status2">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<select name="numer2">
						<option value="yes">Yes</option>
						<option value="no">No</option>
						<option value="excluded">Excluded</option>
					</select>
					<input type="hidden" name="denom2" value="1" />
					<textarea name="comments2" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="3">
					<label data-tab-row="objname3">Third Value: </label>
					<select name="status">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer3" value="" />
					<input type="text" name="denom3" value="" />
					<textarea name="comments3" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="4">
					<label data-tab-row="objname">Fourth Value: </label>
					<select name="status4">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer4" value="" />
					<input type="text" name="denom4" value="" />
					<textarea name="comments4" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="5">
					<label data-tab-row="objname">Fifth Value: </label>
					<select name="status5">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer5" value="" />
					<input type="text" name="denom5" value="" />
					<textarea name="comments5" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="6">
					<label data-tab-row="objname">Sixth Value: </label>
					<select name="status6">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer6" value="" />
					<input type="text" name="denom6" value="" />
					<textarea name="comments6" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="7">
					<label data-tab-row="objname">Seventh Value: </label>
					<select name="status7">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer7" value="" />
					<input type="text" name="denom7" value="" />
					<textarea name="comments7" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="8">
					<label data-tab-row="objname">Eigth Value: </label>
					<select name="status8">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer8" value="" />
					<input type="text" name="denom8" value="" />
					<textarea name="comments8" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="9">
					<label data-tab-row="objname">Ninth Value: </label>
					<select name="status9">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer9" value="" />
					<input type="text" name="denom9" value="" />
					<textarea name="comments9" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="10">
					<label data-tab-row="objname">Tenth Value: </label>
					<select name="status10">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<select name="numer10">
						<option value="yes">Yes</option>
						<option value="no">No</option>
						<option value="excluded">Excluded</option>
					</select>
					<input type="hidden" name="denom10" value="1" />
					<textarea name="comments10" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="11">
					<label data-tab-row="objname">Eleventh Value: </label>
					<select name="status11">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<select name="numer11">
						<option value="yes">Yes</option>
						<option value="no">No</option>
						<option value="excluded">Excluded</option>
					</select>
					<input type="hidden" name="denom11" value="1" />
					<textarea name="comments11" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="12">
					<label data-tab-row="objname">Twelfth Value: </label>
					<select name="status12">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer12" value="" />
					<input type="text" name="denom12" value="" />
					<textarea name="comments12" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="13">
					<label data-tab-row="objname">Thirteenth Value: </label>
					<select name="status13">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer13" value="" />
					<input type="text" name="denom13" value="" />
					<textarea name="comments13" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="14">
					<label data-tab-row="objname">Fourteenth Value: </label>
					<select name="status14">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<select name="numer14">
						<option value="yes">Yes</option>
						<option value="no">No</option>
						<option value="excluded">Excluded</option>
					</select>
					<input type="hidden" name="denom14" value="1" />
					<textarea name="comments14" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="15">
					<label data-tab-row="objname">Fifteenth Value: </label>
					<select name="status15">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<select name="numer15">
						<option value="yes">Yes</option>
						<option value="no">No</option>
						<option value="excluded">Excluded</option>
					</select>
					<input type="hidden" name="denom15" value="1" />
					<textarea name="comments15" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="16">
					<label data-tab-row="objname">Sixteenth Value: </label>
					<select name="status16">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<select name="numer16">
						<option value="yes">Yes</option>
						<option value="no">No</option>
						<option value="excluded">Excluded</option>
					</select>
					<input type="hidden" name="denom16" value="1" />
					<textarea name="comments16" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="17">
					<label data-tab-row="objname">Seventeenth Value: </label>
					<select name="status17">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer17" value="" />
					<input type="text" name="denom17" value="" />
					<textarea name="comments17" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="18">
					<label data-tab-row="objname">Eighteenth Value: </label>
					<select name="status18">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<select name="numer18">
						<option value="yes">Yes</option>
						<option value="no">No</option>
						<option value="excluded">Excluded</option>
					</select>
					<input type="hidden" name="denom18" value="1" />
					<textarea name="comments18" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="19">
					<label data-tab-row="objname">Nineteenth Value: </label>
					<select name="status19">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer19" value="" />
					<input type="text" name="denom19" value="" />
					<textarea name="comments19" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="20">
					<label data-tab-row="objname">Twentieth Value: </label>
					<select name="status20">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer20" value="" />
					<input type="text" name="denom20" value="" />
					<textarea name="comments20" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="21">
					<label data-tab-row="objname">Twenty-First Value: </label>
					<select name="status21">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer21" value="" />
					<input type="text" name="denom21" value="" />
					<textarea name="comments21" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="22">
					<label data-tab-row="objname">Twenty-Second Value: </label>
					<select name="status22">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer22" value="" />
					<input type="text" name="denom22" value="" />
					<textarea name="comments22" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="23">
					<label data-tab-row="objname">Twenty-Third Value: </label>
					<select name="status23">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<input type="text" name="numer23" value="" />
					<input type="text" name="denom23" value="" />
					<textarea name="comments23" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="24">
					<label data-tab-row="objname">Twenty-Fourth Value: </label>
					<select name="status24">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<select name="numer24">
						<option value="yes">Yes</option>
						<option value="no">No</option>
						<option value="excluded">Excluded</option>
					</select>
					<input type="hidden" name="denom24" value="1" />
					<textarea name="comments24" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<div data-test-num="25">
					<label data-tab-row="objname">Twenty-Fifth Value: </label>
					<select name="status25">
						<option value="not_started">Not started</option>
						<option value="in progress">In Progress</option>
						<option value="obstacles">Obstacles</option>
						<option value="excluded">Excluded</option>
						<option value="done">Done</option>
					</select>
					<select name="numer25">
						<option value="yes">Yes</option>
						<option value="no">No</option>
						<option value="excluded">Excluded</option>
					</select>
					<input type="hidden" name="denom25" value="1" />
					<textarea name="comments25" placeholder="Comments or Concerns"></textarea>
					<br />
					<br />
				</div>
				<button type="submit" name="submit-button" id="submit-button">Submit</button><br />
				<button type="button">Save</button><br />
			</form>
		</div>
	</body>

</html>
