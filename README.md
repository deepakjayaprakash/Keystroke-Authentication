# Keystroke-Authentication
Records the keystroke timing data and creates a model. Applies learning algorithms to differentiate between a valid user and an intruder


The demand for modern tools and techniques to restrict access to applications and services which contain delicate data is 
increasing exponentially each year. Traditional methods such as PINs, tokens, or passwords fail to keep up with the 
challenges presented because they can be lost or stolen, which compromises the system security. On the other hand, 
biometrics based on “who” is the person or “how” the person behaves, 
present a significant security advancement to meet these new challenges.



Biometrics, defined as the physical traits and behavioural characteristics that make each of 
us unique, are a natural choice for identity verification. Biometric attributes 
become the most optimal and ideal candidates for authentication since they cannot be stolen, 
lost or impersonated. 

The most promising approach has been Keystroke biometrics which refers to the habitual patterns or rhythms an individual exhibits while typing on a keyboard input device. Compared to other biometric schemas, keystroke has the primary advantages that:
	No external hardware like scanner or detector is needed. All that is wanted is a keyboard
	The “rhythm” or the pattern of the users is a very reliable statistic.
	It can easily be deployed in conjunction with existing authentication systems.


Implementation
	Front end: HTML 5+ CSS3+ Bootstrap+ Jquery for designing and styling
	JavaScript for front-end validations
	Backend: PHP + Mysql for recording the keystrokes and collecting the registration and login mechanism. 
	Mysql: Database to store User ID’s and passwords and also to hold session info.
	R for building the model and classifying the new entry into a genuine or an outlier.


