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

	<tr ng-repeat="(progI,prog) in progs">
		<td>
			<input type="text" ng-model="prog.name" />
			<p><a ng-click="Update('progs',progI,prog,true)">Save</a></p>
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
				<tr ng-repeat="(pbranchI,pbranch) in pbranches | oFilter:{'prog_id':progI}:this" ng-class="{current:pbranches[pbranchI].edit}" >
	<!-- BRANCH LOCATION -->
					<td>
		<!-- VIEW LOCATION -->
						<div ng-hide="pbranches[pbranchI].edit">
							<p><a href="{{pbranches[pbranchI].link}}" target="_blank">{{locations[pbranches[pbranchI].location_id].name}} ({{locations[locations[pbranches[pbranchI].location_id].parent_id].name}})</a></p>
						</div>

		<!-- EDIT LOCATION -->
						<div ng-show="pbranches[pbranchI].edit">	
							<!-- <select ng-model="pbranches[pbranchI].location_id" ng-options="locationI as (location.name+'('+ locations[location.parent_id].name+')' ) for (locationI,location) in locations"></select> -->
							<b>{{locations[pbranches[pbranchI].location_id].name}} ({{locations[locations[pbranches[pbranchI].location_id].parent_id].name}})</b>
							<input type="text" ng-model="pbranches[pbranchI].link"></input>
						</div>
						
					</td>
	<!-- SUBJECTS -->					
					<td>
						<ul>							
		<!-- VIEW SUBJECTS -->		
							<div ng-hide="pbranches[pbranchI].edit">
								<li ng-repeat="(psubjectI,psubject) in psubjects | oFilter:{'pbranch_id':pbranchI}:this">
									<!-- {{subjects[psubjects[psubjectI].subject_id]}} -->
									<p><b>{{subjects[psubjects[psubjectI].subject_id].name}} ({{subjects[subjects[psubjects[psubjectI].subject_id].parent_id].name}}) </b> - {{subjects[psubjects[psubjectI].subject_id].comments}}</p>
								</li>
							</div>

		<!-- EDIT SUBJECTS -->		
							<div ng-show="pbranches[pbranchI].edit">
			<!-- EDIT EXISTING SUBJECTS -->		
								<li ng-repeat="(psubjectI,psubject) in psubjects | oFilter:{'pbranch_id':pbranchI}:this">
									<!-- <select ng-model="psubjects[psubjectI].subject_id" ng-options="subjectI as (subject.name+'('+subjects[subject.parent_id].name+')' ) for (subjectI,subject) in subjects"></select> -->
									<input type="text" ng-model="subjects[psubjects[psubjectI].subject_id].comments"></input>

									<p>
										<b>{{subjects[psubjects[psubjectI].subject_id].name}}</b>
										<br/>
										Comments: {{subjects[psubjects[psubjectI].subject_id].comments}}
									</p>

									<p><a ng-click="Update('subjects',psubjects[psubjectI].subject_id,subjects[psubjects[psubjectI].subject_id],true)">Update Subject</a>
									| <a ng-click="Remove('psubjects',psubjectI,true)">X</a></p>									
								</li>

			<!-- ADD SUBJECTS -->		
								<div ng-hide="pbranches[pbranchI].addsubject" class="addnew">
									<p><a ng-click="pbranches[pbranchI].addsubject=true">Add Subject</a></p>
								</div>

								<div ng-show="pbranches[pbranchI].addsubject" class="addnew">
									
									<select ng-model="psubjectNew.subject_id" ng-options="subjectI as (subject.name+'('+subjects[subject.parent_id].name+')' ) for (subjectI,subject) in subjects"></select>
									<p><a ng-click="Add('psubjects',psubjectNew,true,{'pbranch_id':pbranchI})">Add</a></p>
								
									<p><a ng-click="pbranches[pbranchI].addsubject=false">Hide</a></p>
								</div>

			<!-- CREATE SUBJECTS -->
								<div ng-hide="pbranches[pbranchI].createsubject" class="createnew">
									<p><a ng-click="pbranches[pbranchI].createsubject=true">Create Subject</a></p>
								</div>
								<div ng-show="pbranches[pbranchI].createsubject" class="createnew">
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
									
									<p><a ng-click="pbranches[pbranchI].createsubject=false">Hide</a></p>
								</div>

							</div>
						</ul>

					</td>
	<!-- THIS IS FOR POSITIONS -->
					<td>
						<ul>
		<!-- VIEW POSITIONS -->
							<div ng-hide="pbranches[pbranchI].edit">
								<li ng-repeat="(ppositionI,pposition) in ppositions | oFilter:{'pbranch_id':pbranchI}:this">
									<!-- <p>{{positions[ppositions[ppositionI].position_id].name}} ({{positions[ppositions[ppositionI].position_id].parent_id].name}}) - {{positions[ppositions[ppositionI].position_id].comments}} </p> -->
									<p>
										<a href="{{ppositions[ppositionI].link}}" target="_blank">
											{{positions[ppositions[ppositionI].position_id].name}} ({{positions[positions[ppositions[ppositionI].position_id].parent_id].name}})
										</a>
											 - {{positions[ppositions[ppositionI].position_id].comments}}
									</p>
									<p>
										Opening:
										<br/>
										{{ppositions[ppositionI].opening}}
										<br/>
										Deadline:
										<br/>
										{{ppositions[ppositionI].deadline}}
									</p>

								</li>
							</div>
		<!-- EDIT POSITIONS -->
							<div ng-show="pbranches[pbranchI].edit">
			<!-- EDIT EXISTING POSITIONS -->
								<li ng-repeat="(ppositionI,pposition) in ppositions | oFilter:{'pbranch_id':pbranchI}:this">

									<input type="text" ng-model="positions[ppositions[ppositionI].position_id].comments"/>									
									<p>
										<b>{{positions[ppositions[ppositionI].position_id].name}} ({{positions[positions[ppositions[ppositionI].position_id].parent_id].name}})</b>
										<br/>
										{{positions[ppositions[ppositionI].position_id].comments}}
									</p>
									
									<p>
										Opening: <input type="text" ng-model="ppositions[ppositionI].opening"/>
										<br/>
										<!-- <input type="date" date-format="YYYY-MM-DD" ng-value="{{ppositions[ppositionI].opening}}"/>  -->
										Deadline: <input type="text" ng-model="ppositions[ppositionI].deadline"/>
										<!-- <br/> -->
										<!-- <input type="date" date-format="YYYY-MM-DD" ng-value="{{ppositions[ppositionI].deadline}}"/> -->
										Link: <input type="text" ng-model="ppositions[ppositionI].link"/>
									</p>

									<p><a ng-click="Update('positions',ppositions[ppositionI].position_id,positions[ppositions[ppositionI].position_id],true)">Update Position</a>
									| <a ng-click="Remove('ppositions',ppositionI,true)">X</a></p>									

								</li>

			<!-- ADD POSITIONS -->
								<div ng-hide="pbranches[pbranchI].addposition" class="addnew">
									<p><a ng-click="pbranches[pbranchI].addposition=true">Add Position</a></p>
								</div>

								<div ng-show="pbranches[pbranchI].addposition" class="addnew">
									
									<select ng-model="ppositionNew.position_id" ng-options="positionI as (position.name+'('+positions[position.parent_id].name+')' ) for (positionI,position) in positions"></select>									
									<br/>
									Opening: <input type="text" ng-model="ppositionNew.opening"/>
									<br/>
									Deadline: <input type="text" ng-model="ppositionNew.deadline"/>
									<br/>
									Link: <input type="text" ng-model="ppositionNew.link"/>

									<p><a ng-click="Add('ppositions',ppositionNew,true,{'pbranch_id':pbranchI})">Add</a></p>
								
									<p><a ng-click="pbranches[pbranchI].addposition=false">Hide</a></p>
								</div>

			<!-- CREATE POSITIONS -->
								<div ng-hide="pbranches[pbranchI].createposition" class="createnew">
									<p><a ng-click="pbranches[pbranchI].createposition=true">Create Position</a></p>
								</div>
								<div ng-show="pbranches[pbranchI].createposition" class="createnew">
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
									
									<p><a ng-click="pbranches[pbranchI].createposition=false">Hide</a></p>
								</div>

							</div>

					</td>
	<!-- COMMENTS for BRANCH -->
					<td>
						<div ng-hide="pbranches[pbranchI].edit">
								<p>{{pbranches[pbranchI].comments}}</p>
						</div>

						<div ng-show="pbranches[pbranchI].edit">
								<input type="text" ng-model="pbranches[pbranchI].comments"></input>
						</div>
					</td>
	<!-- CONTROL FOR BRANCH -->
					<td ng-show="pbranches[pbranchI].edit">
						<ul>
							<li><a ng-click="pbranches[pbranchI].edit=false">Lock</a></li>
							<li><a ng-click="Update('pbranches',pbranchI,pbranches[pbranchI],true)">Update Branch</a></li> 
							<li><a ng-click="Remove('pbranches',pbranchI,true)">X</a></li>
						</ul>
					</td>					
					<td ng-hide="pbranches[pbranchI].edit">
						<a ng-click="[(pbranches[pbranchI].edit=true),digest()]">Edit</a>
					</td>
				</tr>
<!-- ADDING A BRANCH/CREATE LOCATION -->
				<tr>
					<td>
		<!-- ADDING A BRANCH -->
						<div ng-hide="prog.addbranch" class="addnew">
							<p><a ng-click="prog.addbranch=true">Add New Branch</a></p>
						</div>

						<div ng-show="prog.addbranch" class="addnew">
							<select ng-model="pbranchesNew.location_id" ng-options="locationI as (location.name+'('+ locations[location.parent_id].name+')' ) for (locationI,location) in locations"></select>
							<p>Link: <input type="text" ng-model="pbranchesNew.link"></input></p>
							<p>Comments: <input type="text" ng-model="pbranchesNew.comments"></input></p>
							<p><a ng-click="Add('pbranches',pbranchesNew,true,{'prog_id':progI})">Add</a></p>
							<p><a ng-click="prog.addbranch=false">Hide</a></p>
						</div>
		<!-- CREATE LOCATION -->
						<div ng-hide="prog.createlocation" class="createnew">
							<p><a ng-click="prog.createlocation=true">Create Location</a></p>
						</div>
						<div ng-show="prog.createlocation" class="createnew">
							<label>Name of Location</label>
							<input type="text" ng-model="locationNew.name"/>
							<label>Parent</label>
								<select ng-model="locationNew.parent_id" ng-options="locationI as (location.name+'('+ locations[location.parent_id].name+')' ) for (locationI,location) in locations | oFilter:{'parent_id':''}"></select>
							<p><a ng-click="Add('locations',locationNew,true)">Add</a></p>					
							<p><a ng-click="prog.createlocation=false">Hide</a></p>
						</div>

					</td>
				</tr>
			</table>			
		</td>
		<td>
			<input type="text" ng-model="prog.comments" />
			<p><a ng-click="Update('progs',progI,prog,true)">Save</a></p>
		</td>
		<td>
			<p><a ng-click="Update('progs',progI,prog,true)">Update</a></p>			
			<p><a ng-click="Remove('progs',progI,true)">Remove</a></p>
		</td>
	</tr>	
	<tr>
		<td>
			<div class="createnew">
				<input type="text" ng-model="progNew.name" />
				<p><a ng-click="Add('progs',progNew,true)">Add</a></p>
			</div>
		</td>
	</tr>
</table>