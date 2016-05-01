
args <- commandArgs(TRUE)

username<-args[1]
arr<-as.numeric(unlist(strsplit(args[2], split=",")))
all_users<-read.csv("timing.csv",header=FALSE)
#Get the user details
for(i in 1:nrow(all_users))
{
  if(all_users[i,1]==username)
    user_details<-all_users[i,]
}
pwd_len<-as.numeric(user_details[2])
num_pwd_stored=0
user_timing_details=array(0,ncol(user_details)-4+1)
for(i in 1:length(user_timing_details))
  user_timing_details[i]=as.numeric(user_details[i+3])
total_timing=array(0,pwd_len)
pwd_timing=c()
while(1)
{
  if((num_pwd_stored*pwd_len+1)>length(user_timing_details))
    break
  if(is.na(user_timing_details[num_pwd_stored*pwd_len+1]))
    break
  cur_pwd_timing=user_timing_details[(num_pwd_stored*pwd_len+1):((num_pwd_stored+1)*pwd_len)]
  temp_array=cur_pwd_timing
  for(i in 2:pwd_len)
  {
    cur_pwd_timing[i]=cur_pwd_timing[i]-temp_array[i-1]
    total_timing[i]=total_timing[i]+cur_pwd_timing[i]
  }
  cur_pwd_timing[1]=0
  num_pwd_stored=num_pwd_stored+1
  pwd_timing=rbind(pwd_timing,cur_pwd_timing)
}
avg_pwd_timing=total_timing/num_pwd_stored

  
#Euclidean distances
anomaly=array(0,pwd_len)
for(i in 1:num_pwd_stored)
{
  cur_avg_arr=array(0,pwd_len)
  cur_test_arr=pwd_timing[i,]
  cur_total_arr=array(0,pwd_len)
  for(j in 1:num_pwd_stored)
  {
    if(i==j)
      next
    cur_total_arr=cur_total_arr+pwd_timing[j,]
  }
  cur_avg_arr=cur_total_arr/(num_pwd_stored-1)
  cur_euclidean_dist=0
  for(j in 1:pwd_len)
  {
    cur_euclidean_dist=cur_euclidean_dist+(cur_test_arr[j]-cur_avg_arr[j])^2
  }
  cur_euclidean_dist=sqrt(cur_euclidean_dist)
  anomaly[i]=cur_euclidean_dist
}
threshold=mean(anomaly)



arr=arr[2:length(arr)]
t_arr=arr
for(i in 2:length(arr))
{
  arr[i]=t_arr[i]-t_arr[i-1]
}
  arr[1]=0
#calculating euclidean distance for what user entered during login
euclidean_dist=0
for(i in 1:pwd_len)
{
  euclidean_dist=euclidean_dist+(arr[i]-avg_pwd_timing[i])^2
}
euclidean_dist=sqrt(euclidean_dist)
#print(flag)
if(euclidean_dist<=threshold)
{
  print("yes")
} else
{
  print("no!")
}