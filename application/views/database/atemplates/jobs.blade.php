<p>
<h2>About</h2>
Then something even more weird happened in the world, and alas, the website was ready!
</p>

<p>
<h2>AngularJS</h2>
This view was built using something you don't give a damn about and shouldn't. If you do, send an email toatularora@gmail.com
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

	<tr ng-repeat="(jobI,job) in jobs">
		<td>
			<b>{{job.name}}</b>
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
				<tr ng-repeat="(jbranchI,jbranch) in jbranches | oFilter:{'job_id':jobI}:this" ng-class="{current:jbranches[jbranchI].edit}" >
	<!-- BRANCH LOCATION -->
					<td>
		<!-- VIEW LOCATION -->
						<div ng-hide="jbranches[jbranchI].edit">
							<p><a href="{{jbranches[jbranchI].link}}" target="_blank">{{locations[jbranches[jbranchI].location_id].name}} ({{locations[locations[jbranches[jbranchI].location_id].parent_id].name}})</a></p>
						</div>						
					</td>
	<!-- SUBJECTS -->					
					<td>
						<ul>							
		<!-- VIEW SUBJECTS -->		
							<div ng-hide="jbranches[jbranchI].edit">
								<li ng-repeat="(jsubjectI,jsubject) in jsubjects | oFilter:{'jbranch_id':jbranchI}:this">
									<!-- {{subjects[jsubjects[jsubjectI].subject_id]}} -->
									<p><b>{{subjects[jsubjects[jsubjectI].subject_id].name}} ({{subjects[subjects[jsubjects[jsubjectI].subject_id].parent_id].name}}) </b> - {{subjects[jsubjects[jsubjectI].subject_id].comments}}</p>
								</li>
							</div>

						</ul>

					</td>
	<!-- THIS IS FOR POSITIONS -->
					<td>
						<ul>
		<!-- VIEW POSITIONS -->
							<div ng-hide="jbranches[jbranchI].edit">
								<li ng-repeat="(jpositionI,jposition) in jpositions | oFilter:{'jbranch_id':jbranchI}:this">
									<!-- <p>{{positions[jpositions[jpositionI].position_id].name}} ({{positions[jpositions[jpositionI].position_id].parent_id].name}}) - {{positions[jpositions[jpositionI].position_id].comments}} </p> -->
									<p>
										<a href="{{jpositions[jpositionI].link}}" target="_blank">
											{{positions[jpositions[jpositionI].position_id].name}} ({{positions[positions[jpositions[jpositionI].position_id].parent_id].name}})
										</a>
											 - {{positions[jpositions[jpositionI].position_id].comments}}
									</p>
									<p>
										Opening:
										<br/>
										{{jpositions[jpositionI].opening}}
										<br/>
										Deadline:
										<br/>
										{{jpositions[jpositionI].deadline}}
									</p>

								</li>
							</div>
					</td>
	<!-- COMMENTS for BRANCH -->
					<td>
						<div ng-hide="jbranches[jbranchI].edit">
								<p>{{jbranches[jbranchI].comments}}</p>
						</div>

					</td>
				</tr>
			</table>			
		</td>
		<td>
			{{job.comments}}			
		</td>
	</tr>	
</table>