<h2>Blade-AngularJS UI</h2>

<!-- <center>
	<input type="text" placeholder="Search Institute Name" ng-model="searchInstitute"/>
</center>
 -->
<table>
	<tr>
		<th  style="width:20px"	>Name</th>
		<th  					>Details</th>
		<th  style="width:100px">Remarks</th>
		<th 					>Control</th>
	</tr>

	<tr ng-repeat="(jobI,job) in jobs">
		<td>
			<input type="text" ng-model="job.name" />
			<p><a ng-click="Update('jobs',jobI,job,true)">Save</a></p>
		</td>
		<td>
			<table>
				<tr>
					<th style="width:20px">Branch</th>
					<th style="width:200px">Subjects</th>
					<th style="width:200px">Positions</th>
					<th style="width:40px">Comments</th>
					<th 				>Control</th>
				</tr>
<!-- THIS IS FOR THE BRANCHES -->
				<tr ng-repeat="(jbranchI,jbranch) in jbranches | oFilter:{'job_id':jobI}:this" ng-class="{current:jbranches[jbranchI].edit}" >
	<!-- BRANCH LOCATION -->
					<td>
		<!-- VIEW LOCATION -->
						<div ng-hide="jbranches[jbranchI].edit">
							<p><a href="{{jbranches[jbranchI].link}}" target="_blank">{{locations[jbranches[jbranchI].location_id].name}} ({{locations[locations[jbranches[jbranchI].location_id].parent_id].name}})</a></p>
						</div>

		<!-- EDIT LOCATION -->
						<div ng-show="jbranches[jbranchI].edit">	
							<!-- <select ng-model="jbranches[jbranchI].location_id" ng-options="locationI as (location.name+'('+ locations[location.parent_id].name+')' ) for (locationI,location) in locations"></select> -->
							<b>{{locations[jbranches[jbranchI].location_id].name}} ({{locations[locations[jbranches[jbranchI].location_id].parent_id].name}})</b>
							<input type="text" ng-model="jbranches[jbranchI].link"></input>
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

		<!-- EDIT SUBJECTS -->		
							<div ng-show="jbranches[jbranchI].edit">
			<!-- EDIT EXISTING SUBJECTS -->		
								<li ng-repeat="(jsubjectI,jsubject) in jsubjects | oFilter:{'jbranch_id':jbranchI}:this">
									<!-- <select ng-model="jsubjects[jsubjectI].subject_id" ng-options="subjectI as (subject.name+'('+subjects[subject.parent_id].name+')' ) for (subjectI,subject) in subjects"></select> -->
									<input type="text" ng-model="subjects[jsubjects[jsubjectI].subject_id].comments"></input>

									<p>
										<b>{{subjects[jsubjects[jsubjectI].subject_id].name}}</b>
										<br/>
										Comments: {{subjects[jsubjects[jsubjectI].subject_id].comments}}
									</p>

									<p><a ng-click="Update('subjects',jsubjectI,subjects[jsubjects[jsubjectI].subject_id],true)">Update Subject</a>
									| <a ng-click="Remove('jsubjects',jsubjectI,true)">X</a></p>									
								</li>

			<!-- ADD SUBJECTS -->		
								<div ng-hide="jbranches[jbranchI].addsubject" class="addnew">
									<p><a ng-click="jbranches[jbranchI].addsubject=true">Add Subject</a></p>
								</div>

								<div ng-show="jbranches[jbranchI].addsubject" class="addnew">
									
									<select ng-model="jsubjectNew.subject_id" ng-options="subjectI as (subject.name+'('+subjects[subject.parent_id].name+')' ) for (subjectI,subject) in subjects"></select>
									<p><a ng-click="Add('jsubjects',jsubjectNew,true,{'jbranch_id':jbranchI})">Add</a></p>
								
									<p><a ng-click="jbranches[jbranchI].addsubject=false">Hide</a></p>
								</div>

			<!-- CREATE SUBJECTS -->
								<div ng-hide="jbranches[jbranchI].createsubject" class="createnew">
									<p><a ng-click="jbranches[jbranchI].createsubject=true">Create Subject</a></p>
								</div>
								<div ng-show="jbranches[jbranchI].createsubject" class="createnew">
									<p>
										<label>Name of Subject</label>
										<input type="text" ng-model="subjectNew.name"/>
									</p>
									<p>
										<label>Parent</label>
										<select ng-model="subjectNew.parent_id" ng-options="subjectI as (subject.name+'('+subjects[subject.parent_id].name+')' ) for (subjectI,subject) in subjects | oFilter:{'parent_id':''}"></select>	
									</p>
									<p>
										<label>Comments</label>
										<input type="text" ng-model="subjectNew.comments"/>
									</p>
									<p><a ng-click="Add('subjects',subjectNew,true)">Add</a></p>
									
									<p><a ng-click="jbranches[jbranchI].createsubject=false">Hide</a></p>
								</div>

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
		<!-- EDIT POSITIONS -->
							<div ng-show="jbranches[jbranchI].edit">
			<!-- EDIT EXISTING POSITIONS -->
								<li ng-repeat="(jpositionI,jposition) in jpositions | oFilter:{'jbranch_id':jbranchI}:this">

									<input type="text" ng-model="positions[jpositions[jpositionI].position_id].comments"/>									
									<p>
										<b>{{positions[jpositions[jpositionI].position_id].name}} ({{positions[positions[jpositions[jpositionI].position_id].parent_id].name}})</b>
										<br/>
										{{positions[jpositions[jpositionI].position_id].comments}}
									</p>
									
									<p>
										Opening: <input type="text" ng-model="jpositions[jpositionI].opening"/>
										<br/>
										<!-- <input type="date" date-format="YYYY-MM-DD" ng-value="{{jpositions[jpositionI].opening}}"/>  -->
										Deadline: <input type="text" ng-model="jpositions[jpositionI].deadline"/>
										<!-- <br/> -->
										<!-- <input type="date" date-format="YYYY-MM-DD" ng-value="{{jpositions[jpositionI].deadline}}"/> -->
										Link: <input type="text" ng-model="jpositions[jpositionI].link"/>
									</p>

									<p><a ng-click="Update('positions',jpositionI,positions[jpositions[jpositionI].position_id],true)">Update Position</a>
									| <a ng-click="Remove('jpositions',jpositionI,true)">X</a></p>									

								</li>

			<!-- ADD POSITIONS -->
								<div ng-hide="jbranches[jbranchI].addposition" class="addnew">
									<p><a ng-click="jbranches[jbranchI].addposition=true">Add Position</a></p>
								</div>

								<div ng-show="jbranches[jbranchI].addposition" class="addnew">
									
									<select ng-model="jpositionNew.position_id" ng-options="positionI as (position.name+'('+positions[position.parent_id].name+')' ) for (positionI,position) in positions"></select>									
									<br/>
									Opening: <input type="text" ng-model="jpositionNew.opening"/>
									<br/>
									Deadline: <input type="text" ng-model="jpositionNew.deadline"/>
									<br/>
									Link: <input type="text" ng-model="jpositionNew.link"/>

									<p><a ng-click="Add('jpositions',jpositionNew,true,{'jbranch_id':jbranchI})">Add</a></p>
								
									<p><a ng-click="jbranches[jbranchI].addposition=false">Hide</a></p>
								</div>

			<!-- CREATE POSITIONS -->
								<div ng-hide="jbranches[jbranchI].createposition" class="createnew">
									<p><a ng-click="jbranches[jbranchI].createposition=true">Create Position</a></p>
								</div>
								<div ng-show="jbranches[jbranchI].createposition" class="createnew">
									<p>
										<label>Name of Position</label>
										<input type="text" ng-model="positionNew.name"/>
									</p>
									<p>
										<label>Parent</label>
										<select ng-model="positionNew.parent_id" ng-options="positionI as (position.name+'('+positions[position.parent_id].name+')' ) for (positionI,position) in positions | oFilter:{'parent_id':''}"></select>	
									</p>
									<p>
										<label>Comments</label>
										<input type="text" ng-model="positionNew.comments"/>
									</p>
									<p><a ng-click="Add('positions',positionNew,true)">Add</a></p>
									
									<p><a ng-click="jbranches[jbranchI].createposition=false">Hide</a></p>
								</div>

							</div>

					</td>
	<!-- COMMENTS for BRANCH -->
					<td>
						<div ng-hide="jbranches[jbranchI].edit">
								<p>{{jbranches[jbranchI].comments}}</p>
						</div>

						<div ng-show="jbranches[jbranchI].edit">
								<input type="text" ng-model="jbranches[jbranchI].comments"></input>
						</div>
					</td>
	<!-- CONTROL FOR BRANCH -->
					<td ng-show="jbranches[jbranchI].edit">
						<ul>
							<li><a ng-click="jbranches[jbranchI].edit=false">Lock</a></li>
							<li><a ng-click="Update('jbranches',jbranchI,jbranches[jbranchI],true)">Update Branch</a></li> 
							<li><a ng-click="Remove('jbranches',jbranchI,true)">X</a></li>
						</ul>
					</td>					
					<td ng-hide="jbranches[jbranchI].edit">
						<a ng-click="[(jbranches[jbranchI].edit=true),digest()]">Edit</a>
					</td>
				</tr>
<!-- ADDING A BRANCH/CREATE LOCATION -->
				<tr>
					<td>
		<!-- ADDING A BRANCH -->
						<div ng-hide="job.addbranch" class="addnew">
							<p><a ng-click="job.addbranch=true">Add New Branch</a></p>
						</div>

						<div ng-show="job.addbranch" class="addnew">
							<select ng-model="jbranchesNew.location_id" ng-options="locationI as (location.name+'('+ locations[location.parent_id].name+')' ) for (locationI,location) in locations"></select>
							<p>Link: <input type="text" ng-model="jbranchesNew.link"></input></p>
							<p>Comments: <input type="text" ng-model="jbranchesNew.comments"></input></p>
							<p><a ng-click="Add('jbranches',jbranchesNew,true,{'job_id':jobI})">Add</a></p>
							<p><a ng-click="job.addbranch=false">Hide</a></p>
						</div>
		<!-- CREATE LOCATION -->
						<div ng-hide="job.createlocation" class="createnew">
							<p><a ng-click="job.createlocation=true">Create Location</a></p>
						</div>
						<div ng-show="job.createlocation" class="createnew">
							<label>Name of Location</label>
							<input type="text" ng-model="locationNew.name"/>
							<label>Parent</label>
								<select ng-model="locationNew.parent_id" ng-options="locationI as (location.name+'('+ locations[location.parent_id].name+')' ) for (locationI,location) in locations | oFilter:{'parent_id':''}"></select>
							<p><a ng-click="Add('locations',locationNew,true)">Add</a></p>					
							<p><a ng-click="job.createlocation=false">Hide</a></p>
						</div>

					</td>
				</tr>
			</table>			
		</td>
		<td>
			<input type="text" ng-model="job.comments" />
			<p><a ng-click="Update('jobs',jobI,job,true)">Save</a></p>
		</td>
		<td>
			<p><a ng-click="Update('jobs',jobI,job,true)">Update</a></p>			
			<p><a ng-click="Remove('jobs',jobI,true)">Remove</a></p>
		</td>
	</tr>	
	<tr>
		<td>
			<div class="createnew">
				<input type="text" ng-model="jobNew.name" />
				<p><a ng-click="Add('jobs',jobNew,true)">Add</a></p>
			</div>
		</td>
	</tr>
</table>