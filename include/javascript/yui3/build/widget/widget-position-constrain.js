/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */
YUI.add('widget-position-constrain',function(Y){var CONSTRAIN="constrain",CONSTRAIN_XYCHANGE="constrain|xyChange",CONSTRAIN_CHANGE="constrainChange",PREVENT_OVERLAP="preventOverlap",ALIGN="align",EMPTY_STR="",BINDUI="bindUI",XY="xy",X_COORD="x",Y_COORD="y",Node=Y.Node,VIEWPORT_REGION="viewportRegion",REGION="region",PREVENT_OVERLAP_MAP;function PositionConstrain(config){if(!this._posNode){Y.error("WidgetPosition needs to be added to the Widget, before WidgetPositionConstrain is added");}
Y.after(this._bindUIPosConstrained,this,BINDUI);}
PositionConstrain.ATTRS={constrain:{value:null,setter:"_setConstrain"},preventOverlap:{value:false}};PREVENT_OVERLAP_MAP=PositionConstrain._PREVENT_OVERLAP={x:{"tltr":1,"blbr":1,"brbl":1,"trtl":1},y:{"trbr":1,"tlbl":1,"bltl":1,"brtr":1}};PositionConstrain.prototype={getConstrainedXY:function(xy,node){node=node||this.get(CONSTRAIN);var constrainingRegion=this._getRegion((node===true)?null:node),nodeRegion=this._posNode.get(REGION);return[this._constrain(xy[0],X_COORD,nodeRegion,constrainingRegion),this._constrain(xy[1],Y_COORD,nodeRegion,constrainingRegion)];},constrain:function(xy,node){var currentXY,constrainedXY,constraint=node||this.get(CONSTRAIN);if(constraint){currentXY=xy||this.get(XY);constrainedXY=this.getConstrainedXY(currentXY,constraint);if(constrainedXY[0]!==currentXY[0]||constrainedXY[1]!==currentXY[1]){this.set(XY,constrainedXY,{constrained:true});}}},_setConstrain:function(val){return(val===true)?val:Node.one(val);},_constrain:function(val,axis,nodeRegion,constrainingRegion){if(constrainingRegion){if(this.get(PREVENT_OVERLAP)){val=this._preventOverlap(val,axis,nodeRegion,constrainingRegion);}
var x=(axis==X_COORD),regionSize=(x)?constrainingRegion.width:constrainingRegion.height,nodeSize=(x)?nodeRegion.width:nodeRegion.height,minConstraint=(x)?constrainingRegion.left:constrainingRegion.top,maxConstraint=(x)?constrainingRegion.right-nodeSize:constrainingRegion.bottom-nodeSize;if(val<minConstraint||val>maxConstraint){if(nodeSize<regionSize){if(val<minConstraint){val=minConstraint;}else if(val>maxConstraint){val=maxConstraint;}}else{val=minConstraint;}}}
return val;},_preventOverlap:function(val,axis,nodeRegion,constrainingRegion){var align=this.get(ALIGN),x=(axis===X_COORD),nodeSize,alignRegion,nearEdge,farEdge,spaceOnNearSide,spaceOnFarSide;if(align&&align.points&&PREVENT_OVERLAP_MAP[axis][align.points.join(EMPTY_STR)]){alignRegion=this._getRegion(align.node);if(alignRegion){nodeSize=(x)?nodeRegion.width:nodeRegion.height;nearEdge=(x)?alignRegion.left:alignRegion.top;farEdge=(x)?alignRegion.right:alignRegion.bottom;spaceOnNearSide=(x)?alignRegion.left-constrainingRegion.left:alignRegion.top-constrainingRegion.top;spaceOnFarSide=(x)?constrainingRegion.right-alignRegion.right:constrainingRegion.bottom-alignRegion.bottom;}
if(val>nearEdge){if(spaceOnFarSide<nodeSize&&spaceOnNearSide>nodeSize){val=nearEdge-nodeSize;}}else{if(spaceOnNearSide<nodeSize&&spaceOnFarSide>nodeSize){val=farEdge;}}}
return val;},_bindUIPosConstrained:function(){this.after(CONSTRAIN_CHANGE,this._afterConstrainChange);this._enableConstraints(this.get(CONSTRAIN));},_afterConstrainChange:function(e){this._enableConstraints(e.newVal);},_enableConstraints:function(enable){if(enable){this.constrain();this._cxyHandle=this._cxyHandle||this.on(CONSTRAIN_XYCHANGE,this._constrainOnXYChange);}else if(this._cxyHandle){this._cxyHandle.detach();this._cxyHandle=null;}},_constrainOnXYChange:function(e){if(!e.constrained){e.newVal=this.getConstrainedXY(e.newVal);}},_getRegion:function(node){var region;if(!node){region=this._posNode.get(VIEWPORT_REGION);}else{node=Node.one(node);if(node){region=node.get(REGION);}}
return region;}};Y.WidgetPositionConstrain=PositionConstrain;},'3.3.0',{requires:['widget-position']});