<?php include("header.php"); ?>
		<div class="titlename" data-title="Assessment Page" id="assessform_page">
			<div id="header">
				<h1>Assessment</h1>
			</div>

			<br />

			<form id="assessform" action="review.php" method="post" enctype="application/x-www-form-urlencoded" name="assessform">
				<div data-test-num="1">
					<label data-tab-row="objname">First Value: </label>
					<select autofocus="autofocus" data-tabrow="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="" />
					<input type="text" data-tab-row="denom" value="" />
					<br />
					<br />
				</div>
				<div data-test-num="2">
					<label data-tab-row="objname">Second Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<select data-tab-row="numer">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Excluded">Excluded</option>
					</select>
					<input type="hidden" data-tab-row="denom" value="1" />
					<br />
					<br />
				</div>
				<div data-test-num="3">
					<label data-tab-row="objname">Third Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="" />
					<input type="text" data-tab-row="denom" value="" />
					<br />
					<br />
				</div>
				<div data-test-num="4">
					<label data-tab-row="objname">Fourth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="5">
					<label data-tab-row="objname">Fifth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="6">
					<label data-tab-row="objname">Sixth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="7">
					<label data-tab-row="objname">Seventh Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="8">
					<label data-tab-row="objname">Eigth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="9">
					<label data-tab-row="objname">Ninth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="10">
					<label data-tab-row="objname">Tenth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<select data-tab-row="numer">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Excluded">Excluded</option>
					</select>
					<input type="hidden" data-tab-row="denom" value="1" />
					<br />
					<br />
				</div>
				<div data-test-num="11">
					<label data-tab-row="objname">Eleventh Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<select data-tab-row="numer">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Excluded">Excluded</option>
					</select>
					<input type="hidden" data-tab-row="denom" value="1" />
					<br />
					<br />
				</div>
				<div data-test-num="12">
					<label data-tab-row="objname">Twelfth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="13">
					<label data-tab-row="objname">Thirteenth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="14">
					<label data-tab-row="objname">Fourteenth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<select data-tab-row="numer">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Excluded">Excluded</option>
					</select>
					<input type="hidden" data-tab-row="denom" value="1" />
					<br />
					<br />
				</div>
				<div data-test-num="15">
					<label data-tab-row="objname">Fifteenth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<select data-tab-row="numer">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Excluded">Excluded</option>
					</select>
					<input type="hidden" data-tab-row="denom" value="1" />
					<br />
					<br />
				</div>
				<div data-test-num="16">
					<label data-tab-row="objname">Sixteenth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<select data-tab-row="numer">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Excluded">Excluded</option>
					</select>
					<input type="hidden" data-tab-row="denom" value="1" />
					<br />
					<br />
				</div>
				<div data-test-num="17">
					<label data-tab-row="objname">Seventeenth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="18">
					<label data-tab-row="objname">Eighteenth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<select data-tab-row="numer">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Excluded">Excluded</option>
					</select>
					<input type="hidden" data-tab-row="denom" value="1" />
					<br />
					<br />
				</div>
				<div data-test-num="19">
					<label data-tab-row="objname">Nineteenth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="20">
					<label data-tab-row="objname">Twentieth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="21">
					<label data-tab-row="objname">Twenty-First Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="22">
					<label data-tab-row="objname">Twenty-Second Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="23">
					<label data-tab-row="objname">Twenty-Third Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<input type="text" data-tab-row="numer" value="">
					<input type="text" data-tab-row="denom" value="">
					<br />
					<br />
				</div>
				<div data-test-num="24">
					<label data-tab-row="objname">Twenty-Fourth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<select data-tab-row="numer">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Excluded">Excluded</option>
					</select>
					<input type="hidden" data-tab-row="denom" value="1" />
					<br />
					<br />
				</div>
				<div data-test-num="25">
					<label data-tab-row="objname">Twenty-Fifth Value: </label>
					<select data-tab-row="status">
						<option value="Not started">Not started</option>
						<option value="In Progress">In Progress</option>
						<option value="Obstacles">Obstacles</option>
						<option value="Excluded">Excluded</option>
						<option value="Done">Done</option>
					</select>
					<select data-tab-row="numer">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Excluded">Excluded</option>
					</select>
					<input type="hidden" data-tab-row="denom" value="1" />
					<br />
					<br />
				</div>
				<button type="submit" name="submit-button" id="submit-button">Submit</button><br />
				<button type="button">Save</button><br />
			</form>
		</div>
	</body>

</html>
