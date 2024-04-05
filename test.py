#def prefix_sum(A,m,n):
#    P_f=[A[0]]
#    for i in range(1,len(A)):
#        P_f.append(P_f[i-1]+A[i])
#    return(P_f[n]-P_f[m-1])
#
#A=[1,2,-6,7,9,5,0,8,-9]
#start=[]
#print(prefix_sum(A,0,7))

def prefix_sum(A,m,n):
    P_f=[A[0]]
    for i in range(1,len(A)):
        P_f.append(P_f[i-1]+A[i])
    return(P_f[n]-P_f[m-1])
    
A = [-7, 1, 5, 2, -4, 3, 0]
left=0
right=0
counter=[]
for i in range(len(A)):
    if i==0:
        right=prefix_sum(A,i+1,len(A)-1)
        if left==right:
            counter.append(i)
    elif i==len(A)-1:
        right=0
        left=prefix_sum(A,0,len(A)-2)
        if left==right:
            counter.append(i)
    else:
        left=prefix_sum(A,0,i-1)
        right=prefix_sum(A,i+1,len(A)-1)
        if left==right:
            counter.append(i)
            
if len(counter)==0:
    print(-1)
else: print(min(counter))

#def prefix_sum(A,m,n):
#    P_f=[A[0]]
#    for i in range(1,len(A)):
#        if i%2!=0:
#            A.remove(A[i])
#            A.insert(i,0)
#            P_f.append(P_f[i-1]+A[i])
#            print(A)
#        else:
#            P_f.append(P_f[i-1]+A[i])
#    print(P_f)
#    return(P_f[n]-P_f[m-1])
#    
#A=[1,2,3,4,5]
#print(prefix_sum(A,1,3))