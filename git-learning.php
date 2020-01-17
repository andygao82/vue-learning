<?
	HEAD -> 指针，当前的版本

	// local area -> commited
	// stage area -> add 
	// working area -> before add

	git checkout -- <file> // discard 修改

	git log --pretty=oneline  // 显示oneline

	git reflog  //  显示head 需要移动的次数

	git reset --hard <hash code>
	git reset --hard HEAD^ // 退1步, ^每1个退1步
	git reset --hard HEAD~3 // 后退3步

	git reset --soft // local 移动head指针  ||  很少用
	git reset --mixed // local 移动head指针, stage 移动head指针  ||  很少用
	git reset --hard // local 移动head指针，stage 移动head指针，工作区移动head指针

	git branch -v //  查看分支并且显示当前version
	git merge <branch name> // merge branch to current branch