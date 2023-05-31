#Tjerk Veenstra
#245464
#4/11/22
import time

score = int()
questionNumber = 0
stop = False

question1 = {
    "question": "Question",
    "Answer": "answer"
    }
question2 = {
    "question": "Question2",
    "Answer": "answer2"
    }
allQuestion = [question1, question2]

while stop == False:
    startTime = time.time()
    print(allQuestion[questionNumber]["question"])
    answerd = input("Input your answer here: ").lower()
    if answerd == allQuestion[questionNumber]["Answer"]:
        print("That is the right answer")
        score += 1
        print("Your score =", score)
    else:
        print("That was the wrong answer you get no points")
        print("The correct answer was", allQuestion[questionNumber]["Answer"])
    questionNumber += 1
    if questionNumber > len(allQuestion) - 1:
        stop = True

endTime = time.time()
totalTime = endTime - startTime
textTime = "It took you {:.2f} seconds to finish te quiz"
print(textTime.format(totalTime), "With a total of", score, "point(s)" )