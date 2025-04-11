@echo off
setlocal enabledelayedexpansion
set count=1

for %%f in (*.jpeg) do (
    ren "%%f" "jokimage!count!.jpg"
    set /a count+=1
)

pause >nul
