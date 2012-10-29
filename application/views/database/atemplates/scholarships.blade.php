<p>
<h2>About</h2>
Silence is what was observed, after the solitude was broken, by the shattered existence of awe inspirer's soul.
</p>

<p>
<h2>Laravel</h2>
So what did we learn in school today? work for long enough, and you will be rewarded with nothing. Criticism is key to success, now you just need to find the right lock.
</p>

<!-- <center>
	<input type="text" placeholder="Search Institute Name" ng-model="searchInstitute"/>
</center>
 -->
<table>
	<tr>
		<th  style="width:100px"	>Name</th>
		<th  					>Details</th>
		<th  style="width:100px">Remarks</th>
	</tr>

	<tr ng-repeat="(scholarI,scholar) in scholars">
		<td>
			<b>{{scholar.name}}</b>
		</td>
		<td>
			<table>
				<tr>
					<th style="width:20px">Branch</th>
					<th style="width:200px">Subjects</th>
					<th style="width:200px">Positions</th>
					<th style="width:40px">Comments</th>
				</tr>
<!-- THIS IS FOR THE BRANCHES -->
				<tr ng-repeat="(sbranchI,sbranch) in sbranches | oFilter:{'scholar_id':scholarI}:this" ng-class="{current:sbranches[sbranchI].edit}" >
	<!-- BRANCH LOCATION -->
					<td>
		<!-- VIEW LOCATION -->
						<div ng-hide="sbranches[sbranchI].edit">
							<p><a href="{{sbranches[sbranchI].link}}" target="_blank">{{locations[sbranches[sbranchI].location_id].name}} ({{locations[locations[sbranches[sbranchI].location_id].parent_id].name}})</a></p>
						</div>
					
					</td>
	<!-- SUBJECTS -->					
					<td>
						<ul>							
		<!-- VIEW SUBJECTS -->		
							<div ng-hide="sbranches[sbranchI].edit">
								<li ng-repeat="(ssubjectI,ssubject) in ssubjects | oFilter:{'sbranch_id':sbranchI}:this">
									<!-- {{subjects[ssubjects[ssubjectI].subject_id]}} -->
									<p><b>{{subjects[ssubjects[ssubjectI].subject_id].name}} ({{subjects[subjects[ssubjects[ssubjectI].subject_id].parent_id].name}}) </b> - {{subjects[ssubjects[ssubjectI].subject_id].comments}}</p>
								</li>
							</div>
						</ul>

					</td>
	<!-- THIS IS FOR POSITIONS -->
					<td>
						<ul>
		<!-- VIEW POSITIONS -->
							<div ng-hide="sbranches[sbranchI].edit">
								<li ng-repeat="(spositionI,sposition) in spositions | oFilter:{'sbranch_id':sbranchI}:this">
									<!-- <p>{{positions[spositions[spositionI].position_id].name}} ({{positions[spositions[spositionI].position_id].parent_id].name}}) - {{positions[spositions[spositionI].position_id].comments}} </p> -->
									<p>
										<a href="{{spositions[spositionI].link}}" target="_blank">
											{{positions[spositions[spositionI].position_id].name}} ({{positions[positions[spositions[spositionI].position_id].parent_id].name}})
										</a>
											 - {{positions[spositions[spositionI].position_id].comments}}
									</p>
									<p>
										Opening:
										<br/>
										{{spositions[spositionI].opening}}
										<br/>
										Deadline:
										<br/>
										{{spositions[spositionI].deadline}}
									</p>

								</li>
							</div>
					</td>
	<!-- COMMENTS for BRANCH -->
					<td>
						<div ng-hide="sbranches[sbranchI].edit">
								<p>{{sbranches[sbranchI].comments}}</p>
						</div>
					</td>
				</tr>
			</table>			
		</td>
		<td>
			{{scholar.comments}}			
		</td>
	</tr>	
</table>