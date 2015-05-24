/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */
YUI.add('highlight-base',function(Y){var YArray=Y.Array,Escape=Y.Escape,WordBreak=Y.Text.WordBreak,isArray=Y.Lang.isArray,EMPTY_OBJECT={},UNCLOSED_ENTITY='(&[^;\\s]*)?',Highlight={_REGEX:UNCLOSED_ENTITY+'(%needles)',_REPLACER:function(match,p1,p2){return p1&&!(/\s/).test(p2)?match:Highlight._TEMPLATE.replace(/\{s\}/g,p2);},_START_REGEX:'^'+UNCLOSED_ENTITY+'(%needles)',_TEMPLATE:'<b class="yui3-highlight">{s}</b>',all:function(haystack,needles,options){var i,len,regex,replacer;if(!options){options=EMPTY_OBJECT;}
regex=options.startsWith?Highlight._START_REGEX:Highlight._REGEX;replacer=options.replacer||Highlight._REPLACER;needles=isArray(needles)?needles.concat():[needles];for(i=0,len=needles.length;i<len;++i){needles[i]=Escape.regex(Escape.html(needles[i]));}
haystack=Escape.html(haystack);return haystack.replace(new RegExp(regex.replace('%needles',needles.join('|')),options.caseSensitive?'g':'gi'),replacer);},allCase:function(haystack,needles,options){return Highlight.all(haystack,needles,Y.merge(options||EMPTY_OBJECT,{caseSensitive:true}));},start:function(haystack,needles,options){return Highlight.all(haystack,needles,Y.merge(options||EMPTY_OBJECT,{startsWith:true}));},startCase:function(haystack,needles){return Highlight.start(haystack,needles,{caseSensitive:true});},words:function(haystack,needles,options){var caseSensitive,mapper,template=Highlight._TEMPLATE,words;if(!options){options=EMPTY_OBJECT;}
caseSensitive=!!options.caseSensitive;needles=YArray.hash(isArray(needles)?needles:WordBreak.getUniqueWords(needles,{ignoreCase:!caseSensitive}));mapper=options.mapper||function(word,needles){if(needles.hasOwnProperty(caseSensitive?word:word.toLowerCase())){return template.replace(/\{s\}/g,Escape.html(word));}
return Escape.html(word);};words=WordBreak.getWords(haystack,{includePunctuation:true,includeWhitespace:true});return YArray.map(words,function(word){return mapper(word,needles);}).join('');},wordsCase:function(haystack,needles){return Highlight.words(haystack,needles,{caseSensitive:true});}};Y.Highlight=Highlight;},'3.3.0',{requires:['array-extras','escape','text-wordbreak']});YUI.add('highlight-accentfold',function(Y){var AccentFold=Y.Text.AccentFold,Escape=Y.Escape,EMPTY_OBJECT={},Highlight=Y.mix(Y.Highlight,{allFold:function(haystack,needles,options){var template=Highlight._TEMPLATE,result=[],startPos=0;options=Y.merge({replacer:function(match,p1,foldedNeedle,pos){var len;if(p1&&!(/\s/).test(foldedNeedle)){return match;}
len=foldedNeedle.length;result.push(haystack.substring(startPos,pos)+
template.replace(/\{s\}/g,haystack.substr(pos,len)));startPos=pos+len;}},options||EMPTY_OBJECT);Highlight.all(AccentFold.fold(haystack),AccentFold.fold(needles),options);if(startPos<haystack.length-1){result.push(haystack.substr(startPos));}
return result.join('');},startFold:function(haystack,needles){return Highlight.allFold(haystack,needles,{startsWith:true});},wordsFold:function(haystack,needles){var template=Highlight._TEMPLATE;return Highlight.words(haystack,AccentFold.fold(needles),{mapper:function(word,needles){if(needles.hasOwnProperty(AccentFold.fold(word))){return template.replace(/\{s\}/g,Escape.html(word));}
return Escape.html(word);}});}});},'3.3.0',{requires:['highlight-base','text-accentfold']});YUI.add('highlight',function(Y){},'3.3.0',{use:['highlight-base','highlight-accentfold']});