# Keystroke-Authentication

Records the keystroke timing data and creates a model. Applies learning algorithms to differentiate between a valid user and an intruder. Biometrics based on “who” is the person or “how” the person behaves, 
present a significant security advancement to meet new challenges of security.


The most promising approach has been **Keystroke Biometrics** which refers to the habitual patterns or rhythms an individual exhibits while typing on a keyboard input device. Compared to other biometric schemas, keystroke has the primary advantages that:

- No **external hardware** like scanner or detector is needed. All that is wanted is a keyboard.
- The **rhythm** or the pattern of the users is a very reliable statistic.
- It can easily be deployed in conjunction with existing authentication systems.


## Implementation
- **Front end** : HTML 5+ CSS3+ Bootstrap+ Jquery for designing and styling and JavaScript for front-end validations
- **Backend** : PHP + Mysql for recording the keystrokes and collecting the registration and login mechanism. 
- **Database** : MySQL to store User ID’s and passwords and also to hold session info.
- **Machine Learning/ Statistical Modelling**: R 

## Metrics Used

- **Manhatten Mean** : Simple model, fixed threshold, not robust
- **Euclidean Mean** : Adaptible model, dynamic thresholding, less robust
- **Manhatten Median** : Simple model, fixed threshold, robust 


