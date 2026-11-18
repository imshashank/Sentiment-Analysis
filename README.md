Sentiment-Analysis
==================

Sentiment Analysis

Update:
The code was modifed to include the FINN list and have better UI.

About:
A java program that uses hash function to map words in an article and maps then to the given word list.

The word list is defined in a words.csv file.

We are using the ANEW words list and trying to find the valence,arousal and dominance of the words found in the article.

Developed by:

[Shashank Agarwal](https://www.linkedin.com/in/shashankagarwal2/)

Mail me at mail[at]shashank.pw

Demo: http://thegeeklabs.com/java/

URL: http://shashank.pw/

## Reading the archived example

The Java implementation looks up tokens in the supplied lexicons and averages the ratings for matches. Preserve the match count beside the averages when comparing two documents. A document with only one matched occurrence can have the same average as one with broad coverage. The historical output below has 20 matched occurrences in 318 words, about 6.3% coverage. It also reports a match for each occurrence of repeated words such as “price.”

The source splits text on spaces and uses exact lookups. It does not model context or negation, and its original server-side file paths require adjustment for a local run.

......................................................................................................

Sample output:

Microsofts Cheap Shot At The iPad Actually Points.... "
article has 318 words

Word= market Rating: 5.66

Word= want Rating: 5.25

Word= dog Rating: 7.57

Word= willing Rating: 6.6

Word= ad Rating: 5

Word= difficult Rating: 2.93

Word= female Rating: 7.83

Word= like Rating: 7.52

Word= me Rating: 8.06

Word= couple Rating: 7.41

Word= like Rating: 7.52 

Word= price Rating: 3.83 

Word= price Rating: 3.83 

Word= problem Rating: 2.74 

Word= market Rating: 5.66 

Word= part Rating: 5.11 

Word= trash Rating: 2.67 

Word= magical Rating: 7.46 

Word= useful Rating: 7.14 

Word= ad Rating: 5 

Found total of 20 words 

Valence is 5.7395  

Arousal is 5.4954996 

Dominance is 5.425333 

Done
