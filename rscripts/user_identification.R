
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
  num_pwd_stored=num_pwd_stored+1
}
avg_pwd_timing=total_timing/num_pwd_stored

flag=1
arr=arr[2:length(arr)]
t_arr=arr
for(i in 2:length(arr))
  arr[i]=t_arr[i]-t_arr[i-1]
arr[1]=0
diff_arr=arr
avg_pwd_timing=avg_pwd_timing[1:length(arr)]
for(i in 1:length(arr))
{
  diff_arr[i]=avg_pwd_timing[i]-arr[i]
}
for(i in 1:length(diff_arr))
{
  #print(diff_arr[i])
  if(diff_arr[i]>-150 )
  {
    if(diff_arr[i]<150)
    {
      flag=1
    }
    else
    {
      flag=0
      break
    }
  }
  else
  {
    flag=0
    break
  }
}

#print(flag)
if(flag==0)
{
  print("no!")
}
if(flag==1)
{
  print("yes")
}